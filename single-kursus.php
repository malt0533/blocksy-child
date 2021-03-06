<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blocksy
 */

get_header();
?>
<main class="">
<div id="primary" class="content-area">
		<main id="main " class="site-main singleview">
		
		<!-- First Section -->
		<section class="single_section">
			<div class="text">
				<div>
					<h2 class=>DET VI TILBYDER</h2>
					<h3 class="navn"></h3>
					<p class="beskrivelse"></p>	
				</div>
				<img class="image" src="#" alt="" />
			</div>
			<div class="details_container">
				<div class="details">
					<div class="icon">⏰</div>
					<p class="varighed">---</p>
				</div>
				<div class="details">
					<div class="icon">💸</div>
					<p class="pris">---</p>
				</div>
				<div class="details">
					<div class="icon">👥</div>
					<p class="antal">---</p>
				</div>
			</div>
		</section>

		<!-- Second Section -->
		<section>
			<div class="content_wrapper">
				
			
			<div>
				<h3></h3>
				<p></p>
			</div>
			<div>
				<img class="image" src="#" alt="" />
			</div>
				</div>
		</section>
		<!-- Third Section -->
		<section>
			<div class="content_wrapper">
			<div>
				<h3></h3>
				<p></p>
			</div>
			<div>
				<img class="image" src="#" alt="" />
			</div>
				</div>
		</section>
			<!-- Fourth Section -->
		<section>
			<div class="content_wrapper">
			<div>
				<h3></h3>
				<p></p>
			</div>
			<div>
				<img class="image" src="#" alt="" />
			</div>
				</div>
		</section>
			<!-- Fifth Section -->
		<section>
			<div class="content_wrapper">
			<div>
				<h3></h3>
				<p></p>
			</div>
			<div>
				<img class="image" src="#" alt="" />
			</div>
				</div>
		</section>
			<!-- Sixth Section -->
		<section>
			<div class="content_wrapper">
			<div>
				<h3></h3>
				<p></p>
			</div>
			<div>
				<img class="image" src="#" alt="" />
			</div>
				</div>
		</section>
			</main>

		<script>
			/** @format */
			const url = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-json/wp/v2/kursus/" + <?php echo get_the_ID() ?>;

			let kursus;
			
			
			// Rest API Call
			async function loadJSON() {
				const JSONData = await fetch(url);
				kursus = await JSONData.json();
				console.log(kursus)
				vis();
			}
				

			function vis() {
                document.querySelector(".navn").textContent = kursus.titel;
                document.querySelector(".beskrivelse").textContent = kursus._info_tekst;
				document.querySelector(".image").src = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-content/uploads/2021/11/fn_verdensmaal.png"
                document.querySelector(".pris").textContent = `${kursus.pris}`;
				document.querySelector(".antal").textContent = `${kursus.antal_deltagere}`;
				document.querySelector(".varighed").textContent = `${kursus.varighed}`;


				// Singleview PODS
				document.querySelector("section:nth-child(2) h3").textContent = kursus.titel_1;
				document.querySelector("section:nth-child(2) p").textContent = kursus.tekst_1;
				document.querySelector("section:nth-child(2) .image").src = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-content/uploads/2021/11/fn_verdensmaal.png"
				
				document.querySelector("section:nth-child(3) h3").textContent = kursus.titel_2;
				document.querySelector("section:nth-child(3) p").textContent = kursus.tekst_2;
				document.querySelector("section:nth-child(3) .image").src = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-content/uploads/2021/11/fn_verdensmaal.png"
				
				document.querySelector("section:nth-child(4) h3").textContent = kursus.titel_3;
				document.querySelector("section:nth-child(4) p").textContent = kursus.tekst_3;
				document.querySelector("section:nth-child(4) .image").src = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-content/uploads/2021/11/fn_verdensmaal.png"
				
				document.querySelector("section:nth-child(5) h3").textContent = kursus.titel_4;
				document.querySelector("section:nth-child(5) p").textContent = kursus.tekst_4;
				document.querySelector("section:nth-child(5) .image").src = "https://malteskjoldager.dk/kea/2.Semester/Tema_9/ungebyen/wp-content/uploads/2021/11/fn_verdensmaal.png"
				
				document.querySelector("section:nth-child(6) h3").textContent = kursus.titel_5;
				document.querySelector("section:nth-child(6) p").textContent = kursus.tekst_5;
				
				
			}
			loadJSON()
			</script>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();