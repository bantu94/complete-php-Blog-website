<style>
  .footer__container {
    /* background: #6495ED; */
    background: rgb(37, 150, 190);
  }
</style>

<main class="footer__container">
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Support</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="<?=ROOT?>/write-for-us" class="nav-link p-0 text-muted">Write for us</a></li>
            <li class="nav-item mb-2"><a href="<?=ROOT?>/donate" class="nav-link p-0 text-muted">We accept Donations</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5 class="text-black">Site Links</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
          <h5>Legal</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Privacy policy</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terms of service</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; <?=date("2020 - Y")?> Back To My Roots. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
</main>