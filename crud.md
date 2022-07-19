# CRUD

## Creare le rotte per il sistema CRUD nel web.php
```php
Route::get('nome', 'NomeController');
```
## 
<hr>

## 1. INDEX - prendere dal database tutti i record di un'entità e passarli ad una view
```php
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    // creare una variabile alla quale verranno assegnati i dati del database attraverso il Model Post e il suo metodo ::all()
    // all() si usa per ottenere tutti i dati senza nessuna condizione
    // get() si usa per aggiungere le query
    // per esempio creare una query per ottenere i dati in ordine decrescente in base all'id
    // $posts = Post::orderByDesc('id')->get()
    $posts = Post::all();
    // restituire la view della pagina contenente i record (index)
    // con compact si richiama, sotto forma di stringa, la variabile e le proprietà
    return view('admin.posts.index', compact('posts'));
}
```
<hr>

## 2. CREATE - creare un nuovo post
```php
/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{   
    // restituisce la view contenente un form
    return view('admin.posts.create');
}
```

### Inserire come valore dell'attributo action la rotta che avrà il compito di gestire i dati del form. In questo caso si tratta della rotta 'admin.posts.store.' In più bisogna aggiungere 'POST' nell'attributo method
```php
<form action="{{route('admin.posts.store')}}" method="post">
```
### L'ultima cosa che va aggiunta è il token '@csrf', sotto il tag iniziale di form, per assicurarsi che la chiamata post avvenga tramite un form del sito
```php
<form action="{{route('admin.posts.store')}}" method="post">
@csrf
```

## Validazione
### Messaggio di validazione errata per ogni campo richiesto non inserito
```php
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
```
### Bordo dell'input colorato di rosso in caso di validazione mancata
```php
<input id="title" type="text" class="@error('title') is-invalid @enderror">
```
### Messaggio di errore sotto l'input in caso di validazione mancata
```php
@error('title')
    <div class="alert alert-danger">{{ $created|$edited|$deleted }}</div>
@enderror
```
### Per visualizzare questo messaggio bisogna inserire la variabile '$created|$edited|$deleted' nel Controller, nella rotta durante la reindirizzazione
```php
// esempio
// metodo store durante la creazione del post
return redirect()->route('admin.posts.index')->with('created', 'Post Created Successfully');
// metodo update durante la modifica del post
return redirect()->route('admin.posts.index')->with('edited', 'Post Edited Successfully');
// metodo destroy durante l'eliminazione del post
return redirect()->route('admin.posts.index')->with('deleted', 'Post Deleted Successfully');
```
<hr>

## 3. STORE - qua vengono passate le coppie name-value inviate dal form tramite un'istanza della classe Request $request

## - REQUEST
### Creare una nuova Request
```bash
php artisan make:request "NomeRequest"
```

### Nella Request modificare l'autorizzazione a 'true' per poter interagire con la richiesta
```php
/**
 * Determine if the user is authorized to make this request.
 *
 * @return bool
 */
public function authorize()
{
    return true;
}
```

### Creare le regola di validazione
```php
/**
 * Get the validation rules that apply to the request.
 *
 * @return array
 */
public function rules()
{
    return [
        'title'       => 'required|unique:posts|max:150',
        'cover_image' => 'nullable',
        'content'     => 'nullable',
    ];
}
```

## - SLUG
### Aggiungere 'slug' nella tabella del database e poi fare la migrazione
### ATTENZIONE! 'slug' deve essere una colonna del database per poterlo usare più avanti per la rinominazione del link di ogni singolo post
```php
/**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150)->unique();
            $table->text('content')->nullable();
            $table->string('slug');
            $table->string('cover_image');
            $table->timestamps();
        });
    }
```

### Creare la funzione nel Model per richiamare il metodo slug() ogni volta che si vuole usare - facoltativo
```php
public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
```

### Aggiungere 'slug' nel Model nella variabile protetta
```php
 protected $fillable = ['title', 'content', 'slug', 'cover_image'];
```

### Una volta creato il Request e slug si compila il metodo store

```php
/**
 * Store a newly created resource in storage.
 *
 * @param  \App\Http\Requests\PostRequest $request
 * @return \Illuminate\Http\Response
 */
public function store(PostRequest $request)
{

    // dichiarare la variabile associativa per la richiesta della regola di validazione
    $validated_data = $request->validated();
    // creare la variabile alla quale verrà assegnato lo stesso valore del titolo del singolo post
    $slug = Post::generateSlug($request->title);
    // si create la chiave 'slug', se già esiste la modifica, e le viene assegnata la variabile dello slug
    $validated_data['slug'] = $slug;
    // creare la risorsa
    Post::create($validated_data);
    // ricevuto i dati del form i viene reindirizzati nella view 'index'
    return redirect()->route('admin.posts.index');
}
```
<hr>

## 4. SHOW - vedere la pagina dettagliata di un singolo post
```php
/**
 * Display the specified resource.
 *
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */
public function show(Post $post)
{
    // restituire la view 'show' in base al singolo 'post'
    return view('admin.posts.show', compact('post'));
}
```
### Nel file 'index.blade.php', nel href del pulsante, inserire la rotta che porta alla singola pagina show in base al 'id' o 'slug' del post
```php 
<a class="btn btn-primary" href="{{ route('admin.posts.show', $post->id|slug) }}">View</a>
```
<hr>

## 5. EDIT - modificare il post esistente

### Edit è simile a create con la differenza che gli dobbiamo passare il record che vogliamo modificare
```php
// inserire nell'attributo action la rotta update passando l'id del post da modificare
<form action="{{route('admin.posts.update', $post->id|slug)}}" method="post">
    @csrf
    // si modifica il valore linkandolo a quello già esistente per poterlo modificare
    value="{{$post->title}}">
```
### Sotto il tag di apertura form si aggiunge il metodo PUT
```php
<form action="{{route('admin.posts.update', $post->id|slug)}}" method="post">
    @csrf
    @method('PUT')
```
### Nel file 'index.blade.php', nel href del pulsante, inserire la rotta che porta alla singola pagina edit in base al 'id' o 'slug' del post
```php 
<a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id|slug) }}">Edit</a>
```
<hr>

## 6. UPDATE - leggere i dati modificati passati tramite il form
```php
/**
 * Update the specified resource in storage.
 *
 * @param  \App\Http\Requests\PostRequest  $request
 * @param  \App\Models\Post  $post
 * @return \Illuminate\Http\Response
 */
public function update(PostRequest $request, Post $post)
{
    // riutilizzo gli stessi dai del metodo store
    $validated_data = $request->validated();
    $slug = Post::generateSlug($request->title);
    $validated_data['slug'] = $slug;
    Post::create($validated_data);
    // ricevuto i dati del form si viene reindirizzati nella view 'index'
    return redirect()->route('admin.posts.index');
}
```
<hr>

## 7. DESTROY - eliminare un singolo post
```php
/**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Post  $post
    * @return \Illuminate\Http\Response
    */
public function destroy(Post $post)
{
    // eliminare un singolo post
    $post->delete();
    // eliminato il post si viene reindirizzati nella view 'index'
    return redirect()->route('admin.posts.index');
}
```
### Nel file 'index.blade.php', creare un form, con la rotta che porta a destroy del singolo post in base a 'id' o 'slug' con l'attributo method impostato su 'POST'
```php 
<form action="{{route('admin.posts.destroy', $post->id|slug)}}" method="post">
    @csrf
    // Sotto il tag di apertura form si aggiunge il metodo DELETE
    @method('DELETE')
    <input class="btn btn-danger" type="submit" value="Delete">
</form>
```
<hr>