{extends file="main.tpl"}

{block name=content}

<div class = "center">

<table class="table table-bordered table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">ID Wynik</th>
      <th scope="col">Kwota</th>
      <th scope="col">Ilość lat</th>
      <th scope="col">Oprocentowanie</th>
      <th scope="col">Rata miesięczna</th>
      <th scope="col">Data i godzina</th>
    </tr>
  </thead>
  <tbody>
    {foreach $wyniki as $w}
    {strip}
	    <tr>
		    <td>{$w["ID_wynik"]}</td>
		    <td>{$w["kwota"]}</td>
		    <td>{$w["ile_lat"]}</td>
        <td>{$w["oprocentowanie"]}</td>
        <td>{$w["rata_miesieczna"]}</td>
        <td>{$w["data"]}</td>
	    </tr>
    {/strip}
    {/foreach}
  </tbody>
</table>

</div>

{/block}