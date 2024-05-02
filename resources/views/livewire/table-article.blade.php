<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-8">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sottotitolo</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                        <tr>
                          <th scope="row">{{$article->id}}</th>
                          <td>{{$article->title}}</td>
                          <td>{{$article->subtitle}}</td>
                          <td>
                            <a class="btn btn-info" href="{{route('article.show', compact('article'))}}">Mostra</a>
                            <a class="btn btn-warning" href="{{route('article.edit', compact('article'))}}">Modifica</a>
                            <button {{-- wire:click="destroy({{$article}})" --}} class="btn btn-danger">Elimina</button>
                          </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
