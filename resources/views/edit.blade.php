
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tim Githinji" />
	<link rel="shortcut icon" href="../favicon.ico">

	<link rel="stylesheet" href="{{URL::asset('css/home-grid-2/style.css')}}"> 

	<link rel ="stylesheet" href="{{URL::asset('css/users/body-nao-quiz.css') }}"/>
	<link rel ="stylesheet" href="{{URL::asset('css/users/component-nao-quiz.css') }}"  />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/users/set2-quiz.css') }}" />


	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/button-styles/buttons.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/button-styles/base.css')}}" />


		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sticky-table/demo.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/sticky-table/component.css')}}" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 


	<style type="text/css">
		.email,
		.password,
		.incorrect_answer
		{
			position:relative;
			left:16%;
		}

		.main form{
			padding-top: 1em;
		}
		
		textarea{
			position: relative;
			left: 1%;
			width: 50%;
		}


		.submit_button{
			/*margin-top: 8.5em;*/
		}
	</style>
</head>
<body>
	<div class="container">

		<div class="main">


			<h2 class="home_titles"><a> </a></h2>



			<form action="{{action('HomeController@postProducts')}}" method="POST"   id="interview_form" enctype="multipart/form-data">


				

				<div class="email">
					<span class="input input--nao">
						<input class="input__field input__field--nao" type="text" id="input-3" name="product_name" value="{{$product_name}}"  required />
						<label class="input__label input__label--nao" for="input-3">
							<span class="input__label-content input__label-content--nao">Product name</span>
						</label>
						<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
							<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
						</svg>
					</span>
				</div>


				<div class="email">
					<span class="input input--nao">
						<input class="input__field input__field--nao" type="text" id="input-3" name="stock_quantity" value="{{$stock_quantity}}"  required />
						<label class="input__label input__label--nao" for="input-3">
							<span class="input__label-content input__label-content--nao">Quantity in stock</span>
						</label>
						<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
							<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
						</svg>
					</span>
				</div>

				<div class="email">
					<span class="input input--nao">
						<input class="input__field input__field--nao" type="text" id="input-3" name="price" value="{{$price}}"  required />
						<label class="input__label input__label--nao" for="input-3">
							<span class="input__label-content input__label-content--nao">Price per item</span>
						</label>
						<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
							<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
						</svg>
					</span>
				</div>

				
				<input type="hidden" name="_token" value="{{{csrf_token()}}}">


				<div class="submit_button">

					<button class="button button--naira button--round-s button--border-thin"><i class="button__icon icon fa fa-send"></i><span class="auth_text">Submit</span></button>


				</div>

			</form>
		</div>

		@if($table == '1')











<table>
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Quantity</th>
							<th>Price</th>
							<th>Date submitted</th>
							<th>Total value</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<tr>
						<td class="user-name">{{$product_name}}</td>
						<td class="user-email">{{$stock_quantity}}</td>
						<td class="user-phone">{{$price}}</td>
						<td class="user-mobile">{{$date}}</td>
						<td class="user-mobile">{{$stock_quantity*$price}}</td>
	
						<td class="user-mobile">
							<a href="{{action('HomeController@editProduct', [$product_name, $stock_quantity, $price, $date])}}" class="button button--itzel half-width button--text-thick"><i class="button__icon icon fa fa-edit"></i><span>Edit</span></a>
						</td>
						</tr>
						
					</tbody>
				</table>











		@endif
	</div>
	<script src="{{URL::asset('js/users/classie.js') }}"></script>

	<script src="{{URL::asset('js/form-nao/jquery.js') }}"></script>





	<script>
		(function() {
			var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
			if(isSafari) {
				document.getElementById('support-note').style.display = 'block';
			}
		})();
	</script>




	<script>
		(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="{{URL::asset('js/sticky-table/jquery.stickyheader.js')}}"></script>


	</body>
	</html>


