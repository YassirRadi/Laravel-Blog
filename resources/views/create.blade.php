@extends('layouts.master')


@section('content')
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <h1>Add a New Article</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('createArticle')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-outline mb-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" name="title" class="form-control" value="{{ old('title') }}" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="content">Article Content</label>
                        <textarea class="form-control" name="content" rows="20">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="image">Article Image</label><br>
                        <input type="file" name="image_url" class="form-control" value="{{ old('image_url') }}"" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="category">Category</label>
                        <select name="category" id="">
                            @foreach ($categories as $category)
                              <option id="{{ $category->id }}" value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="tags">Tags</label>
                        <input type="text" name="tags" class="form-control" value="{{ old('tags') }}" />
                    </div>

                    {{-- <input type="hidden" name="user" value="{{ auth()->user()->id }}"> --}}

                    <button type="submit" class="btn btn-primary btn-block mb-4">Publish</button>
                </form>
            </div>
        </div>
    </div>
@endsection