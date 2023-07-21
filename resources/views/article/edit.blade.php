<x-layout>
    <section class="container-fluid bg-danger">
        <div class="row">
            <div class="col 12">
                <h1 class="display-1 text-center text-white">Modifica Articolo: {{$article['title']}}</h1>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <livewire:article-form-edit
                articleId="{{$article['id']}}"/>
            </div>
        </div>
    </section>
</x-layout>