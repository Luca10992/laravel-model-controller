@extends('layout.app')
@section('title-name')
    - {{ $movies[$index]->title }}
@endsection

@section('main-content')

<div class="detail-bg d-flex justify-content-center align-items-center">
    <div class="container py-3 px-5">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Titolo: <span>{{ $movies[$index]->title }}</span></h4>
                <h4>Titolo originale: <span>{{ $movies[$index]->original_title }}</span></h4>
            </div>
            <div>
                <h4>Nazionalità: <span>{{ $movies[$index]->nationality }}</span></h4>
                <h4>Data di uscita: <span>{{ $movies[$index]->date }}</span></h4>
                <h4>Valutazione: <span>{{ $movies[$index]->vote }}</span></h4>
            </div>
        </div>
        <div>
            <h4>Descrizione: <br>
                <span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolores delectus officiis consequatur cum quidem quibusdam adipisci in omnis aliquam? At ratione et numquam quo sint, voluptas iste. Qui, odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure blanditiis voluptates quam officia alias deserunt neque cupiditate voluptas, inventore itaque placeat distinctio vero quaerat eaque ea sit sunt possimus atque?
                </span>
            </h4>
        </div>
    </div>
</div>

@endsection