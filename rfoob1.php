<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
    .rating-item {
        color: gold;
        font-size: 24px;
        margin-right: 5px;
    }
body {
	background-color: #f5f7fa;
}

.testimonial-card .card-up {
  height: 120px;
  overflow: hidden;
  border-top-left-radius: .25rem;
  border-top-right-radius: .25rem;
}

.aqua-gradient {
  background: linear-gradient(40deg, #2096ff, #05ffa3) !important;
}

.testimonial-card .avatar {
  width: 120px;
  margin-top: -60px;
  overflow: hidden;
  border: 5px solid #fff;
  border-radius: 50%;
}

</style>

</head>
<body>
<h1 style="text-align:center;">Recidencey</h1>
<div class="container">
   <div class="row">
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="hotel1.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Rajvilas Hotel</h4>
        <hr>
          <ul class="list-unstyled">4.1
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
       
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="hotel2.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Sasya Hotel</h4>
        <hr>
          <ul class="list-unstyled">4.3
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="hotel3.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Pushpak hotel</h4>
        <hr>
          <ul class="list-unstyled">4.6
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="hotel2.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Tulasi Hotel</h4>
        <hr>
          <ul class="list-unstyled">4.5
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        
         
      </div>
    </div>
    
  </section>
</div>
</div>
</div>


                 <!--<ul class="list-unstyled">
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>-->
                
		
			
		
<script>
    function updateRating(rating) {
        const ratingItems = document.querySelectorAll('.rating-item');

        for (let i = 0; i < ratingItems.length; i++) {
            if (i < rating) {
                ratingItems[i].classList.add('fas');
                ratingItems[i].classList.remove('far');
            } else {
                ratingItems[i].classList.add('far');
                ratingItems[i].classList.remove('fas');
            }
        }
    }

    // Call the function with a specific rating (e.g., 3 stars)
    updateRating(3);
</script>
<h1 style="text-align:center;">Kurnool food Courts</h1>
<div class="container">
   <div class="row">
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="food1.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Lotus Restaurant</h4>
        <hr>
          <ul class="list-unstyled">4.0
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        <p>Time For Opening:6:00AM TO 9:00PM </p>
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="food2.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Ajwa Restaurant</h4>
        <hr>
          <ul class="list-unstyled">4.9
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        <p>Time For Opening:6:00AM TO 9:00PM </p>
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="food3.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">Madhulok Restaurant & Bar</h4>
        <hr>
          <ul class="list-unstyled">4.3
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        <p>Time For Opening:7:00AM TO 10:00PM </p>
         
      </div>
    </div>
    
  </section>
</div>
<div class="col-3">
  <section class="mx-auto my-5" style="max-width: 23rem;">
      
    <div class="card testimonial-card mt-2 mb-3">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="food1.jpeg" class="rounded-circle img-fluid"
          alt="woman avatar">
      </div>
      <div class="card-body text-center">
        <h4 class="card-title font-weight-bold">S P Reddy Punjabi Dhaba</h4>
        <hr>
          <ul class="list-unstyled">4.1
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>
                
        <p>Time For Opening:6:00AM TO 10:00PM </p>
         
      </div>
    </div>
    
  </section>
</div>
</div>
</div>


                 <!--<ul class="list-unstyled">
                 <li class="rating-item"><i class="fas fa-star"></i></li>
                <li class="rating-item"><i class="fas fa-star"></i></li>
               <li class="rating-item"><i class="fas fa-star"></i></li>
                 <li class="rating-item"><i class="fas fa-star"></i></li>
              <li class="rating-item"><i class="far fa-star"></i></li>
                  </ul>-->
                
		
			
		
<script>
    function updateRating(rating) {
        const ratingItems = document.querySelectorAll('.rating-item');

        for (let i = 0; i < ratingItems.length; i++) {
            if (i < rating) {
                ratingItems[i].classList.add('fas');
                ratingItems[i].classList.remove('far');
            } else {
                ratingItems[i].classList.add('far');
                ratingItems[i].classList.remove('fas');
            }
        }
    }

    // Call the function with a specific rating (e.g., 3 stars)
    updateRating(3);
</script>

</body>
</html>
