  <!--Code a venir -->
  @foreach($articles as $article)
           {{  Str::limit($article->texte,100) }}<br><br><br><br><br>

  @endforeach