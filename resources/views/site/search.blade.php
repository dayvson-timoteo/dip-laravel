@extends('site.layouts.base')

  @section('titulo', 'Pesquisa')
  
  @section('conteudo')
  <div class="informacao-pagina">
      <div class="contato-principal">
        <form method="POST" action="{{ route('site.search') }}">
          @csrf
          <input type="search" name="pesquisa" placeholder="Digite o número da publicação" class="borda-preta" required>
          <button type="submit" class="borda-preta" >pesquisar</button>
        </form>
      <div class="resultado">
        <table class="table caption-top table-striped">
          <caption></caption>
          <thead>
            <tr>
              <th scope="col">Tipo de Publicação</th>
              <th scope="col">Nº</th>
              <th scope="col">Unidade</th>
              <th scope="col">Data da Publicação</th>
              <th scope="col">Arquivo</th>
            </tr>
          </thead>
          <tbody>
            @if (empty($_POST))            
            @foreach ($cadastros as $indice=>$cadastro)
            <tr>
              <th scope="row">{{$cadastro['tipo']}}</th>
              <td>{{$cadastro['numero']}}</td>
              <td>{{$cadastro['unidade']}}</td>
              <td>{{$cadastro['data']}}</td>
              <td><a href="{{$cadastro['linkPdf']}}"><img class="logo-pdf" src="{{ asset('img/pdf-p.png') }}" alt=""></a></td>
              <tr>
                @php
                  $msg = $cadastro['conteudo'];
                  $msg = explode(' ', $msg);
                  $msg = array_slice($msg, 0, 101);
                  $msg = $msg = implode(" ", $msg) ;
                @endphp
                <td colspan="5">{{$msg}}</td>
              </tr>
            </tr>
            @endforeach
            @endif


            @if (!empty($_POST))        
            @foreach ($cadastros as $indice=>$cadastro)
            <tr>
              <th scope="row">{{$cadastro['tipo']}}</th>
              <td>{{$cadastro['numero']}}</td>
              <td>{{$cadastro['unidade']}}</td>
              <td>{{$cadastro['data']}}</td>
              <td><a href="{{$cadastro['linkPdf']}}"><img class="logo-pdf" src="{{ asset('img/pdf-p.png') }}" alt=""></a></td>
              <tr>
                @php
                  $search = mb_strtolower($_POST['pesquisa']);
                  $doc = $cadastro['conteudo'];
                  // $doc = mb_strtolower($doc);
                  // $wordIndice = array_search($search, $doc);
                  
                  // if ($wordIndice >=50) {
                    //   $doc = array_slice($doc, $wordIndice, 70);
                    // }
                    // else{
                      //   $doc = array_slice($doc, $wordIndice, 70);
                      // }
                      // $doc = implode(" ", $doc); 
                      
                  $doc = mb_strtolower($doc);
                  $indice = strpos($doc, $search);
                  $doc = substr($doc, $indice, $indice + 2);
                  $doc = explode(" ",$doc);
                  $doc = array_slice($doc, 0, 70);
                  $doc = implode(" ", $doc); 
                @endphp
                <td colspan="5" class="mensagem">@php echo $doc @endphp</td>
              </tr>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>
      </div>
  </div>
</div>

@endsection