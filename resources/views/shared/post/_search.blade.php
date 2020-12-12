<div class="card my-4">
    <h5 class="card-header bg-dark text-white">Rechercher</h5>
    <div class="card-body">
        <div class="input-group">
        {!! Form::open(['route' => 'home', 'class' => 'd-flex', 'method' => 'GET']) !!}
        <div class="input-group mr-sm-3">
            {!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => __('posts.search')]) !!}
        </div>

        <span class="input-group-append">
            <button class="btn btn-secondary" type="submit">Go!</button>
        </span>
        {!! Form::close() !!}
        </div>
    </div>
</div>