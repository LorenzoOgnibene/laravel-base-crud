{{--Creo un unico form per edit e create || 
    creo una variabile per la rotta--}}

    <form action="{{ route($routeName, $book) }}" method="POST" enctype="multipart/form-data" class="py-5">
        @csrf
        {{--Inserisco il metodo PUT per la rotta update // vedere rotte con route:list--}}
        @method($method)
    
        <div class="card px-5 py-5">
    
            <div class="form-outline w-25 mb-3">
                <label for="ISBN" class="form-label {{--@error('ISBN') is-invalid @enderror--}}">ISBN</label>
                <input type="text" class="form-control" id="ISBN" placeholder="Insert ISBN" name="ISBN" value="{{old('ISBN', $book->ISBN)}}">
                {{--inserisco l'errore sotto al singolo input
                @error('ISBN')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror--}}         
            </div>
    
            <div class="form-outline w-100 mb-3">
                <label for="title<" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Insert title" name="title" value="{{old('title', $book->title)}}">               
            </div>
    
            <div class="form-outline w-100 mb-3">
                <label for="description<" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Insert description" name="description" value="{{old('description', $book->description)}}">               
            </div>

            <div class="form-outline w-100 mb-3">
                <label for="author<" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" placeholder="Insert author" name="author" value="{{old('author', $book->author)}}">               
            </div>
    
            <div class="form-outline w-25 mb-3">
                <label for="publication_year" class="form-label>Publication Year</label>
                <input type="text" class="form-control" id="publication_year" placeholder="Insert publication year" name="publication_year" value="{{old('publication_year', $book->publication_year)}}">
            </div>
    
            <div class="form-outline w-25 mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" class="form-control" id="cover_image" placeholder="Insert cover image" name="cover_image" value="{{old('cover_image', $book->cover_image)}}">
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" placeholder="Insert genre" name="genre" value="{{old('genre', $book->genre)}}">
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="publishing_house" class="form-label">Publishing House</label>
                <input type="text" class="form-control" id="publishing_house" placeholder="Insert publishing house" name="publishing_house" value="{{old('publishing_house', $book->publishing_house)}}">
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="language" class="form-label">Language</label>
                <input type="text" class="form-control" id="language" placeholder="Insert language" name="language" value="{{old('language', $book->language)}}">
            </div>
            
        </div>
    
        <div class="card-footer text-end py-4 d-flex justify-content-between">
            <a href="" class="btn btn-dark rounded-circle"><i class="fa-solid fa-angles-left"></i></a>
            <button type="submit" class="btn btn-success rounded-circle"><i class="fa-solid fa-plus"></i></i></button>
        </div>
    
    </form>

    {{--rotta per tornare all'index: {{ route('admin.books.index')}} --}}