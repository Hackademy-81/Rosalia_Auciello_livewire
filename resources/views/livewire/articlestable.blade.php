<div>
    {{-- Do your work, then step back. --}}
    <input type="text" wire:model="search" class="my-5">
    <table class="table border table-dark table-striped my-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Corpo</th>
            <th scope="col">Azione</th>
            <th scope="col">Azione</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
               <tr>
                    <th scope="row">{{$article['id']}}</th>
                    <td>{{$article['title']}}</td>
                    <td>{{$article['subtitle']}}</td>
                    <td>{{$article['body']}}</td>
                    <td><a class="btn btn-danger" wire:click="deleteArticle({{$article['id']}})">Elimina</a></td>
                    <td><a class="btn btn-warning" href="{{route('article.edit', $article['id'])}}">Modifica</a></td>
                </tr> 
            @endforeach         
        </tbody>
      </table>
</div>
