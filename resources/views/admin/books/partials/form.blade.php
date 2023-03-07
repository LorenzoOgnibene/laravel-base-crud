{{--Creo un unico form per edit e create || 
    creo una variabile per la rotta--}}

    <form action="{{ route($routeName, $book) }}" method="POST" enctype="multipart/form-data" class="py-3">
        @csrf
        {{--Inserisco il metodo PUT per la rotta update // vedere rotte con route:list--}}
        @method($method)
    
        <div class="card px-5 py-3 mb-3">
    
            <div class="form-outline w-25 mb-3">
                <label for="ISBN" class="form-label @error('ISBN') is-invalid @enderror">ISBN</label>
                <input type="text" class="form-control" id="ISBN" placeholder="Insert ISBN" maxlength="13" name="ISBN" value="{{old('ISBN', $book->ISBN)}}">
                {{--inserisco l'errore sotto al singolo input--}}  
                @error('ISBN')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror       
            </div>
    
            <div class="form-outline w-100 mb-3">
                <label for="title<" class="form-label @error('title') is-invalid @enderror">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Insert title" name="title" value="{{old('title', $book->title)}}">
                @error('title')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror                  
            </div>
    
            <div class="form-outline w-100 mb-3">
                <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
                <input type="text" class="form-control" id="description" placeholder="Insert description" name="description" value="{{old('description', $book->description)}}">               
                @error('description')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>

            <div class="form-outline w-100 mb-3">
                <label for="author" class="form-label @error('author') is-invalid @enderror">Author</label>
                <input type="text" class="form-control" id="author" placeholder="Insert author" name="author" value="{{old('author', $book->author)}}">               
                @error('author')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>
    
            <div class="form-outline w-25 mb-3">
                <label for="publication_year" class="form-label @error('publication_year') is-invalid @enderror">Publication Year</label>
                <input type="text" class="form-control" id="publication_year" placeholder="Insert publication year" name="publication_year" value="{{old('publication_year', $book->publication_year)}}">
                @error('publication_year')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>
    
            <div class="form-outline w-25 mb-3">
                <label for="cover_image" class="form-label @error('cover_image') is-invalid @enderror">Cover Image</label>
                <input type="file" class="form-control" id="cover_image" placeholder="Insert cover image" name="cover_image" value="{{old('cover_image', $book->cover_image)}}">
                @error('cover_image')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="genre" class="form-label @error('genre') is-invalid @enderror">Genre</label>
                <input type="text" class="form-control" id="genre" placeholder="Insert genre" name="genre" value="{{old('genre', $book->genre)}}">
                @error('genre')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="publishing_house" class="form-label @error('publishing_house') is-invalid @enderror">Publishing House</label>
                <input type="text" class="form-control" id="publishing_house" placeholder="Insert publishing house" name="publishing_house" value="{{old('publishing_house', $book->publishing_house)}}">
                @error('publishing_house')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>

            <div class="form-outline w-25 mb-3">
                <label for="language" class="form-label @error('language') is-invalid @enderror">Language</label>
                <input type="text" class="form-control" id="language" placeholder="Insert language" name="language" value="{{old('language', $book->language)}}">
                @error('language')
                    <div class="invalid-feedback px-2">
                        <i class="fa-solid fa-circle-exclamation pe-1"></i>{{ $message }}
                    </div>
                @enderror               
            </div>
            
        </div>
    
        <div class="card-footer text-end py-4 d-flex justify-content-between">
            <a href="{{ route('admin.books.index')}}" class="btn btn-dark rounded-circle"><i class="fa-solid fa-angles-left"></i></a>
            <button type="submit" class="btn btn-success rounded-circle"><i class="fa-solid fa-book"></i></button>
        </div>
    
    </form>

    