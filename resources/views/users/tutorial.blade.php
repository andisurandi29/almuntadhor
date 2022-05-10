@extends('layouts.main')
<!-- container -->
@section('container')
<!-- Navbar -->
@include('partials.navbar')
<!-- Sidebar -->
@include('partials.sidebar')

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-default-light text-white me-2">
              <i class="fas fa-arrow-circle-left"></i>
          </span> Cara Pembayaran
        </h3>
      </div>
      <div class="card">
        <div class="card-body">
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      Video Tutorial
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body text-center">
                            <div class='embed-container'>
                                <iframe width="500" height="300" src="https://www.youtube.com/embed/wOANoMCkOFo?feature=player_embedded?HD=1?rel=0?showinfo=0"></iframe>
                            </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                      Panduan Pembayaran
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                     <ol>
                         <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam modi voluptatem iure? Veritatis eligendi sint eveniet sit praesentium corrupti, odit repellat ut excepturi, eos, animi quibusdam accusantium porro molestiae ab.</li>
                         <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed ratione eligendi non beatae dolorem, in iste ipsa similique ducimus eum voluptatum officiis ex corrupti deleniti. Explicabo hic tenetur fugit dignissimos!</li>
                         <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto, quo asperiores. Doloremque, nisi mollitia. Tempore explicabo quas atque, omnis accusantium similique dolores dicta hic harum. Cum consequatur excepturi nobis nam.</li>
                         <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut fugiat veritatis totam eveniet. Error ipsam obcaecati iusto? Minima quae odit cum deleniti voluptates ducimus vero adipisci, debitis architecto facere minus.</li>
                     </ol>
                    </div>
                  </div>
                </div>
                
              </div>

        </div>
      </div>
    </div>
  </div>
  </div>
<!-- Footer -->
@include('partials.footer')
  


        
   