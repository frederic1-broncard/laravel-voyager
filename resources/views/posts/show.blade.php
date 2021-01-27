@extends('template.index')
@section('content')
    <div class="col-lg-8 posts-list">
        <div class="single-post">
            <div class="feature-img">
                <img class="img-fluid" src="{{ Voyager::image( $post->image ) }}" alt="image">
            </div>
            <div class="blog_details">
                <h2>{{$post->title}}
                </h2>
                <ul class="blog-info-link mt-3 mb-4">
                    @foreach ($post->tags as $tag)
                        <li><a href="#"><i class="fa fa-user"></i>{{$tag->name}}</a></li>

                        @endforeach</a>

                </ul>
                <p class="excert">
              {!!$post->content!!}
                </p>
            </div>
        </div>

        <div class="blog-author">
            <div class="media align-items-center">
                <img src="{{ Voyager::image( $post->author->avatar) }}"  alt="avatar de l'auteur">
                <div class="media-body">
                    <h3>Auteur:</h3>
                    <a href="#">

                        <h4> {{$post->author->firstname}} {{$post->author->lastname}}</h4>
                        <p>Biographie de l'auteur</p>
                    </a>
                </div>
            </div>





                    <div class="comment-form">
                       <h5>Commentaire</h5>



                        <div class="title">{{ $post->commentaire->author }}</div>
                        <div class="text truncate" data-id="{{ $post->commentaire->id }}">{{ $post->commentaire->content }}</div>
                        <div><a href="#" class="edit">Editer le texte</a> | <a href="#" class="delete">Supprimer la publication</a></div>

                    </div>




        </div>
    </div>
@endsection
