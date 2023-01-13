<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
  <link rel="stylesheet" href="./style.css">
</head>


<body>
  <main>
    <div class="input-container">
      <input type="text" placeholder='Search for mountain, lake, ocean, tree...' id='input'>
    </div>

    <div class="gallery_title">
      <h1>Design Collections</h1>
    </div>

    <article class='gallery'>
      <a href="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='The great thing about reaching the top of the mountain is realising that there’s space for more than one person. And you’re now in the prime position to help others up.' class='item' title='Hay Bales'>
        <img src="https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="first image">
      </a>
      <a href="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='A lake is a landscape’s most beautiful and expressive feature. It is Earth’s eye; looking into which the beholder measures the depth of his own nature.' class='item' title='Lake'>
        <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="second image">
      </a>
      <a href="https://images.pexels.com/photos/2775196/pexels-photo-2775196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='The human desire to obtain more is a sieve that can never be filled with all the water from the world’s oceans' title='Canyon' class='item'>
        <img src="https://images.pexels.com/photos/2775196/pexels-photo-2775196.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="third image">
      </a>
      <a href="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Knowing trees, I understand the meaning of patience. Knowing grass, I can appreciate persistence." title='Iceberg' class='item'>
        <img src="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fourth image">
      </a>
      <a href="https://images.pexels.com/photos/6004828/pexels-photo-6004828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Life is like a train track, full of possibilities and happiness" title='Desert' class='item'>
        <img src="https://images.pexels.com/photos/6004828/pexels-photo-6004828.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fifth image">
      </a>
      <a href="https://images.pexels.com/photos/1533060/pexels-photo-1533060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='Hell is a swamp, to me - not as something fiery, but as something dank, moist, and wet' title='Fall' class='item'>
        <img src="https://images.pexels.com/photos/1533060/pexels-photo-1533060.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="sixth image">
      </a>
      <a href="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption="Knowing trees, I understand the meaning of patience. Knowing grass, I can appreciate persistence." title='Iceberg' class='item'>
        <img src="https://images.pexels.com/photos/20045/pexels-photo.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="fourth image">
      </a>
      <a href="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" data-caption='A lake is a landscape’s most beautiful and expressive feature. It is Earth’s eye; looking into which the beholder measures the depth of his own nature.' class='item' title='Lake'>
        <img src="https://images.pexels.com/photos/814499/pexels-photo-814499.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="second image">
      </a>
    </article>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script src="./script.js"></script>
  <script>
    window.addEventListener("load", function() {
      baguetteBox.run(".gallery");
    });
  </script>
</body>

</html>