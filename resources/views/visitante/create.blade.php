@extends('master')
	@section('content')

	<div class="row">
		<div class="col-md-12">
			<h4><strong>Preencha os dados, sempre temos novidades.</strong></h4>
		</div>
	</div>
	@if(session()->has('message'))
    <div class="alert alert-success alert-dismissable">
    	<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        {{ session()->get('message') }}
    </div>
	@endif
	<div class="row">
		<div class="col-md-5 fundo">
			<form class="" action="{{ route('visitante.store') }}" method="post">
				{{ csrf_field() }}
				<div class="form-group{{ ($errors->has('nome')) ? $errors->first('nome') : '' }}">
					<label for="InputNome">Nome</label>
					<input type="text" id="nome" name="nome" class="form-control" value="{{old('nome')}}" placeholder="Digite seu nome">
					{!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
				</div>
				<div class="row">
	 				<div class="form-group col-md-5 col-sm-5{{ ($errors->has('sexo')) ? $errors->first('sexo') : '' }}">
						<label for="InputSexo">Sexo</label>
						<select id="sexo" name="sexo" class="form-control">
						<option value="0">Selecione</option>
						<option value="F">Feminino</option>
						<option value="M">Masculino</option>
						</select>
						
						{!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
					</div>	 				
					<div class="form-group col-md-7 col-sm-7{{ ($errors->has('email')) ? $errors->first('email') : '' }}">
						<label for="InputEmail">Email</label>
						<input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" placeholder="Digite seu email">
						{!! $errors->first('email', '<p class="help-block">:message</p>') !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group  col-md-5 col-sm-5{{ ($errors->has('telefone_celular')) ? $errors->first('telefone_celular') : '' }}">
						<label for="InputTelefoneCelular">Telefone Celular</label>
						<input type="text" id="telefone_celular" name="telefone_celular" class="form-control" value="{{old('telefone_celular')}}" placeholder="Digite o nº de celular">
						{!! $errors->first('telefone_celular', '<p class="help-block">:message</p>') !!}
					</div>
					<div class="form-group  col-md-7 col-sm-7{{ ($errors->has('data_nascimento')) ? $errors->first('data_nascimento') : '' }}">
						<label for="InputDataNascimento">Data Nascimento</label>
						<input type="text" id="data_nascimento" name="data_nascimento" class="form-control" value="{{old('data_nascimento')}}" placeholder="Digite a data de nascimento">
						{!! $errors->first('data_nascimento', '<p class="help-block">:message</p>') !!}
					</div>	
				</div>	
				<div class="row">
					<div class="form-group  col-md-5 col-sm-5{{ ($errors->has('cep')) ? $errors->first('cep') : '' }}">
						<label for="InputCep">Cep</label>
						<input type="text" id="cep" name="cep" class="form-control" value="{{old('cep')}}" placeholder="Cep">
						{!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
					</div>						
					<div class="form-group  col-md-7 col-sm-7{{ ($errors->has('logradouro')) ? $errors->first('logradouro') : '' }}">
						<label for="InputLogradouro">Logradouro</label>
						<input type="text" id="logradouro" name="logradouro" class="form-control" value="{{old('logradouro')}}" placeholder="Logradouro">
						{!! $errors->first('logradouro', '<p class="help-block">:message</p>') !!}
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-5 col-sm-5{{ ($errors->has('numero')) ? $errors->first('numero') : '' }}">
						<label for="InputNumero">Numero</label>
						<input type="text" id="numero" name="numero" class="form-control" value="{{old('numero')}}" placeholder="Numero">
						{!! $errors->first('numero', '<p class="help-block">:message</p>') !!}
					</div>		
					<div class="form-group col-md-7 col-sm-7{{ ($errors->has('complemento')) ? $errors->first('complemento') : '' }}">
						<label for="InputComplemento">Complemento</label>
						<input type="text" id="complemento" name="complemento" class="form-control" value="{{old('complemento')}}" placeholder="Complemento">
						{!! $errors->first('complemento', '<p class="help-block">:message</p>') !!}
					</div>	
				</div>	
				<div class="row">
					<div class="form-group col-md-5 col-sm-5{{ ($errors->has('bairro')) ? $errors->first('bairro') : '' }}">
						<label for="InputBairro">Bairro</label>
						<input type="text" id="bairro" name="bairro" class="form-control" value="{{old('bairro')}}" placeholder="Bairro">
						{!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
					</div>		
					<div class="form-group  col-md-7 col-sm-7{{ ($errors->has('cidade')) ? $errors->first('cidade') : '' }}">
						<label for="InputCidade">Cidade</label>
						<input type="text" id="cidade" name="cidade" class="form-control" value="{{old('cidade')}}" placeholder="Cidade">
						{!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-5 col-sm-5{{ ($errors->has('uf')) ? $errors->first('uf') : '' }}">
						<label for="InputEstado">Estado</label>
						<select id="uf" name="uf" class="form-control">
		                    <option value="0">Selecione o Estado</option>
		                    <?php foreach ($estados as $key => $value): ?>
		                        <?php echo "<option value=\"$key\" >$value</option>"; ?>
		                    <?php endforeach; ?>
		                </select>
						{!! $errors->first('uf', '<p class="help-block">:message</p>') !!}
					</div>
				</div>	
				<div class="row">																																														
					<div class="form-group  col-md-7 col-sm-7">
						<input type="submit" class="btn btn-primary" value="Quero receber Novidades">
					</div>	
				</div>						
			</form>
		</div>
	</div>

	@stop()

