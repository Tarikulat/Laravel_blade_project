

 <!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

    
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}


                .print-button {
                    margin-top: 20px;
                    text-align: center;
                }
        
                @media print {
                    body {
                        margin: 0;
                        padding: 0;
                    }
        
                    .invoice-container {
                        width: 100%;
                        box-shadow: none;
                    }
                }
			}
		</style>
	</head>

	<body class="bg-light">
		{{-- <h1>A simple, clean, and responsive HTML invoice template</h1> --}}
		<h3>POS Sales Invoice</h3>
       
      <div class="my-5">
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									{{-- <img src="./images/logo.png" alt="Company logo" style="width: 100%; max-width: 300px" /> --}}
									<h3>Store House</h3>
								</td>

								<td>
									Invoice #:<br />
									<strong>{{date('d/m/y')}}</strong><br />
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									<strong>Name:{{$customer->customer_name}}</strong><br />
									<strong>Address:{{$customer->customer_address}}</strong><br />

								
									
								</td>

								<td>
									Khaleda Akter<br />
								
									john@example.com
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>

			<table class="table">
				<thead>
				  <tr>
					<th scope="col">Serial</th>
					<th scope="col">Product Name</th>
					<th scope="col">Qty</th>
					<th scope="col">Unit</th>
					<th scope="col">Product Price</th>
					<th scope="col">Tax Rate</th>
					<th scope="col">total Tax </th>
					<th scope="col">Price</th>					
					<th scope="col">Total Price</th>					
				  </tr>
				</thead>
				<tbody>
				@foreach($contents as $data)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td >{{ $data->name }}</td>
					<td>{{ $data->qty }}</td>
					<td>{{ $data->weight }}</td>
					<td>{{ $data->price }}</td>
					<td>{{ $data->taxRate }}</td>
					<td>{{ $data->taxRate * $data->qty }}</td>
					<td>{{ $data->price * $data->qty  }}</td>
					<td name="totaltk">{{ $data->price * $data->qty + $data->taxRate * $data->qty  }}</td>
				  </tr>
				@endforeach
				<tr>
					<td colspan="7"> Total Price</td>
					<td colspan="2">{{ $total }}</td>
				</tr>
				  
				  
				</tbody>
			</table>
		</div>

        {{-- <div class="invoice-footer">
            <p><strong>Total: </strong>$80.00</p>
        </div> --}}
    
        <div class="print-button my-3">
            <button onclick="window.print()">Print Invoice</button>
        </div>
    </div>

	</body>
</html>
