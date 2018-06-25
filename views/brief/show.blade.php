@extends('_layouts.app')

@section('content')

<div data-aos="fade" class="aos title-block title-block_portfolio clearfix text-xs-md-center">
	<div class="inner-block pl-172">
		<p class="title-block_small-title">Kategoria 1</p>
		<h2 class="title-block_big-title">Wypełnij Brief</h2>
	</div>
	<div class="inner-block pr-172">
		<p class="title-block_descr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod facere laboriosam! Porro, fugiat! Aspernatur maxime recusandae neque deserunt quaerat eum animi est, quia enim! Consequuntur quasi ad nam voluptate.</p>
	</div>
</div>

<form action="">

<div class="contact-form clearfix">
	<p class="title-block_small-title">Podstawowe informacje</p>
	<div class="row">

			<div class="form-group">
				<input type="text" name="firma" class="form-control ph-bold" id="firma" placeholder="Nazwa firmy">
			</div>
			<div class="form-group">
				<input type="text" name="adres" class="form-control ph-bold" id="adres" placeholder="Adres">
			</div>
			<div class="form-group">
				<input type="text" name="nip" class="form-control ph-bold" id="nip" placeholder="Nip">
			</div>
			<div class="form-group">
				<input type="text" name="osoba" class="form-control ph-bold" id="osoba" placeholder="Osoba do kontaktu">
			</div>
			<div class="form-group">
				<input type="email" name="email" class="form-control ph-bold" id="email" placeholder="E-mail">
			</div>
			<div class="form-group">
				<input type="text" name="phone" class="form-control ph-bold" id="phone" placeholder="Telefon">
			</div>

	</div>
</div>

<div class="contact-form has-label clearfix">
	<p class="title-block_small-title">Informacje jakieś</p>
	<div class="row">

			<div class="form-group">
				<label for="domen" class="form-control_label">Obecna domena</label>
				<input type="text" name="domen" class="form-control" id="domen" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="typ" class="form-control_label">Typ sesji</label>
				<input type="text" name="typ" class="form-control" id="typ" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="opis" class="form-control_label">Krótki opis działalności / usług / produktów</label>
				<input type="text" name="opis" class="form-control" id="opis" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="domen2" class="form-control_label">Obecna domena 2</label>
				<input type="text" name="domen2" class="form-control" id="domen2" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="typ2" class="form-control_label">Typ sesji 2</label>
				<input type="text" name="typ2" class="form-control" id="typ2" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="opis2" class="form-control_label">Krótki opis działalności / usług / produktów 2</label>
				<input type="text" name="opis2" class="form-control" id="opis2" placeholder="Uzupełnij pole">
			</div>
	
	</div>
</div>

<div class="contact-form">
	<p class="title-block_small-title">Wybierz interesujący cię produkt</p>

		<div class="row">
			<div class="checkb-wrapp">
				<input type="checkbox" id='c1' class='chk-btn' />
				<label for='c1'>Oferta 1</label>
			</div>
			<div class="checkb-wrapp">
				<input type="checkbox" id='c2' class='chk-btn' />
				<label for='c2'>Oferta 2</label>
			</div>
			<div class="checkb-wrapp">
				<input type="checkbox" id='c3' class='chk-btn' />
				<label for='c3'>Oferta 3</label>
			</div>
			<div class="checkb-wrapp">
				<input type="checkbox" id='c4' class='chk-btn' />
				<label for='c4'>Oferta 4</label>
			</div>
			<div class="checkb-wrapp">
				<input type="checkbox" id='c5' class='chk-btn' />
				<label for='c5'>Oferta 5</label>
			</div>
			<div class="checkb-wrapp">
				<input type="checkbox" id='c6' class='chk-btn' />
				<label for='c6'>Oferta 6</label>
			</div>
		</div>

</div>


<div class="contact-form has-label clearfix">
	<p class="title-block_small-title">Dodatkowe inforamcje</p>
	<div class="row">

			<div class="form-group">
				<label for="domen3" class="form-control_label">Obecna domena</label>
				<input type="text" name="domen3" class="form-control" id="domen3" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="typ3" class="form-control_label">Typ sesji</label>
				<input type="text" name="typ3" class="form-control" id="typ3" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="opis3" class="form-control_label">Krótki opis działalności / usług / produktów</label>
				<input type="text" name="opis3" class="form-control" id="opis3" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="domen4" class="form-control_label">Obecna domena 2</label>
				<input type="text" name="domen4" class="form-control" id="domen4" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="typ4" class="form-control_label">Typ sesji 2</label>
				<input type="text" name="typ4" class="form-control" id="typ4" placeholder="Uzupełnij pole">
			</div>
			<div class="form-group">
				<label for="opis4" class="form-control_label">Krótki opis działalności / usług / produktów 2</label>
				<input type="text" name="opis4" class="form-control" id="opis4" placeholder="Uzupełnij pole">
			</div>

	</div>
</div>

@include('partials.block-button')

</form>

@endsection

@section('page-scripts')
<script>
	
	$(document).ready(function(){

		AOS.init({
			duration: 1000,
			offset: 10,
		});
	});

</script>
@endsection
