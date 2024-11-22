@extends('layouts.main.app')
@section('head')
@include('layouts.main.headersection',[
'title'=> __('Edit Data'),
'buttons'=>[
    [
        'name'=>__('Back'),
        'url'=>route('admin.satuan.index'),
    ]
]

])
@endsection
@section('content')
<div class="row">
	<div class="col-lg-5 mt-5">
        <strong>{{ __('Edit Data') }}</strong>
        <p>{{ __('Ubah Data Pasien') }}</p>
    </div>
    <div class="col-lg-7 mt-5">
		<div class="card">
			<div class="card-body">
				<form method="post" action="{{ route('admin.satuan.update', $satuan->id) }}" class="ajaxform_instant_reload">
					@csrf
					@method("PUT")
					<div class="form-group">
						<label class="card-title">Nama</label>
						<input type="text" class="form-control" name="nama" id="nama" autocomplete="off" placeholder="Nama" required autofocus autocomplete="nama">
					</div>
					<div class="form-group">
						<label class="card-title">Umur</label>
						<input type="text" class="form-control" name="umur" id="umur" autocomplete="off" placeholder="Umur" required autofocus autocomplete="umur">
					</div>
					<div class="form-group">
						<label class="card-title">Alamat</label>
						<input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off" placeholder="Alamat" required autofocus autocomplete="alamat">
					</div>
					<div class="row plain-text">
						<div class="col-sm-12 plain-text">
							<div class="form-group">
								<label>{{ __('Keterangan') }}</label>
								<textarea class="form-control h-150" name="keterangan" required="" maxlength="1000" placeholder="{{ __('note : Masukkan Keterangan') }}"></textarea>
							</div>
							<div class="form-group">
						<label class="card-title">Harga</label>
						<input type="text" class="form-control" name="harga" id="harga" autocomplete="off" placeholder="Harga" required autofocus autocomplete="harga">
					</div>
						</div>

					</div>
					<div class="card-footer">
						<div class="btn-publish">
							<button type="submit" class="btn btn-primary submit-button"><i class="fa fa-save"></i> {{ __('Update') }}</button>
						</div>
					</div>
				</form>
			</div>
		</div>
@endsection
