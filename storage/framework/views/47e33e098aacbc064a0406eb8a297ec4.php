<nav class="navbar navbar-expand-lg bg-secondary-subtle">
    <div class="container">
      <a class="navbar-brand" href="/">V Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "Home")? 'active' : ''); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "About")? 'active' : ''); ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "Posts")? 'active' : ''); ?>" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo e(($title === "Categories")? 'active' : ''); ?>" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><?php /**PATH C:\laragon\www\prakweb-laravel\resources\views/partials/navbar.blade.php ENDPATH**/ ?>