@extends('site.layouts.base')

  @section('conteudo')
  <div class="informacao-pagina">
      <div class="contato-principal">
        <form method="POST" action="{{ route('app.cadastro') }}">
          @csrf
          <label for="inputText" class="form-label" >Tipo de Publicação </label>  
          <input name="tipo" type="text" placeholder="Digite o tipo da publicação" class="borda-preta">
          <br>
          <label for="inputText2" class="form-label" >Número da Publicação </label>
          <input name="numero"type="text" placeholder="Digite o número da publicação" class="borda-preta">
          <br>
          <label for="inputText3" class="form-label" >Unidade</label>
          <input name="unidade"type="text" placeholder="Digite o nome abreviado de sua unidade" class="borda-preta">
          <br>
          <label for="inputText4" class="form-label" >Data da Publicação</label>
          <input name="data" type="date" placeholder="Nome" class="borda-preta">
          <br>
          <label for="inputText5" class="form-label" >Link do PDF</label>
          <input name="linkPdf"type="text" placeholder="Onde o pdf está hospedado?" class="borda-preta">
          <br>
          <label for="FormControlTextarea1" class="form-label">Conteúdo do Documento</label>
          <textarea name="conteudo"class="borda-preta" placeholder="Cole o conteúdo do documento. Não deve conter imagens!"></textarea>
          <br>
          <button type="submit" class="borda-preta">ENVIAR</button>
        </form>
      </div>
  </div>
</div>

@endsection
