<!DOCTYPE HTML>
<html>
	<head>
		<title>Identificar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/main.css" /> 
	</head>
	<body class="is-preload">
	@include('layout.navbar')
			<div class="centro">
			<form class="formulario"> 
				<input type="file" multiple />
				<button type="button">Identifiar</button>
			  </form>
			</div>
			
		<!-- Wrapper -->
			<div id="wrapper">
				<div class="result-container" >
					<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1 >Información de la planta</h1>
											<h1 id="common-names" ></h1>
											<p>Autoridad del nombre</p>
											<p id="name-authority"></p>
										</header>
										<p>Enlace</p>
										<p id="plant-url"></p>
									</div>
									<span class="image object">
										<img id="uploaded-image" src="" alt="Uploaded Image">
									</span>
								</section>
								<section>
									<header class="major">
										<h2>Descripción</h2>
									</header>
									<p id="wiki-description"></p>
									
								</section>
								<section>
									<header class="major">
										<h2>Taxonomía</h2>
									</header>
									<!-- Table -->
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Taxonomía</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td id="taxonomy"></td>
													<td></td>
												</tr>
											</tbody>
											<tfoot>
											</tfoot>
										</table>
									</div>
								</section>
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Sinonimos</h2>
									</header>
									<!-- Table -->
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>sinonimos</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td id="synonyms"></td>
													<td></td>
												</tr>
											</tbody>
											<tfoot>
											</tfoot>
										</table>
									</div>
								</section>

							<!-- Section 
								<section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<h3>Interdum aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<h3>Nulla amet dolore</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<h3>Tempus ullamcorper</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3>Sed etiam facilis</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
									</div>
								</section>-->

						</div>
					</div>

				</div>

			</div>
			@include('layout.footer')

		<!-- Scripts -->
			<script src="js/script/jquery.min.js"></script>
			<script src="js/script/browser.min.js"></script>
			<script src="js/script/breakpoints.min.js"></script>
			<script src="js/script/util.js"></script>
			<script src="js/script/main.js"></script>

			<script type="text/javascript">
				document.querySelector('button').onclick = function sendIdentification() {
				  const files = [...document.querySelector('input[type=file]').files];
				  const promises = files.map((file) => {
					return new Promise((resolve, reject) => {
					  const reader = new FileReader();
					  reader.onload = (event) => {
						const res = event.target.result;
						console.log(res);
						resolve(res);
					  }
					  reader.readAsDataURL(file)
					})
				  })
			
				  Promise.all(promises).then((base64files) => {
					console.log(base64files)
			
					const data = {
					  api_key: "Xt87LcCs25sHMa3oQ2U5riWZAyKRn4fbvaNLuKkU3FYBT4z6MZ",
					  images: base64files,
					  modifiers: ["crops_fast", "similar_images"],
					  plant_language: "en",
					  plant_details: ["common_names",
						"url",
						"name_authority",
						"wiki_description",
						"taxonomy",
						"synonyms"
					  ],
					};
			
					fetch('https://api.plant.id/v2/identify', {
						method: 'POST',
						headers: {
						  'Content-Type': 'application/json',
						},
						body: JSON.stringify(data),
					  })
					  .then(response => response.json())
					  .then(data => {
						console.log('Success:', data);
						displayPlantInfo(data);
					  })
					  .catch((error) => {
						console.error('Error:', error);
					  });
				  })
				};
			
				function displayPlantInfo(planta) {
				  const imageContainer = document.querySelector('.image');
				  const uploadedImage = document.getElementById('uploaded-image');
				  const resultContainer = document.querySelector('.result-container');
				  const commonNames = document.getElementById('common-names');
				  const nameAuthority = document.getElementById('name-authority');
				  const wikiDescription = document.getElementById('wiki-description');
				  const taxonomy = document.getElementById('taxonomy');
				  const synonyms = document.getElementById('synonyms');
				  const plantUrl = document.getElementById('plant-url');
			
				  if (planta && planta.suggestions && planta.suggestions.length > 0) {
					const plant = planta.suggestions[0];
					const img = planta.images[0];
			
					uploadedImage.src = img.url;
			
					commonNames.textContent = plant.plant_name;
					nameAuthority.textContent = plant.plant_details.name_authority;
					wikiDescription.textContent = plant.plant_details.wiki_description.value;
					taxonomy.textContent = JSON.stringify(plant.plant_details.taxonomy);
					synonyms.innerHTML = plant.plant_details.synonyms.map(synonym => `<li>${synonym}</li>`).join('');
					plantUrl.innerHTML = `<a href="${plant.plant_details.url}" target="_blank">${plant.plant_details.url}</a>`;
			
					resultContainer.style.display = 'block';
				  }
				}
			  </script>

	</body>
</html>