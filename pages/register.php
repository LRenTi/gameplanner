<style>
.signup-img{
    background-image: url('assets/img/illustrations/signin.svg');
}
</style>

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center .signup-img form-bg-image">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Account erstellen</h1>
                            </div>
                            <form action="#" class="mt-4">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="email">Deine Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                        </span>
                                        <input type="email" class="form-control" placeholder="example@company.com" id="email" autofocus required>
                                    </div>  
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                 <div class="form-group mb-4">
                                    <label for="name">Dein Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon icon-xs text-gray-600" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                            </svg>
                                        </span>
                                        <input type="name" class="form-control" placeholder="Vorname" id="name" autofocus required>
                                        <input type="name" class="form-control" placeholder="Nachname" id="lastname" autofocus required>
                                    </div> 
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="telephone">Telefonnummer</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="icon icon-xs text-gray-600" viewBox="-2 -1 18 18">
                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                                                </svg>
                                            </span>
                                            <input type="telephone" placeholder="+43 660 1234567" class="form-control" id="telephone" autofocus required>
                                        </div>  
                                    </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="password">Dein Passwort</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                            </span>
                                            <input type="password" placeholder="Password" class="form-control" id="password" required>
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="confirm_password">Passwort bestätigen</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon2">
                                                <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                            </span>
                                            <input type="password" placeholder="Passwort bestätigen" class="form-control" id="confirm_password" required>
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800">Registrieren</button>
                                </div>
                            </form>
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="fw-normal">
                                    Hast du schon einen Account? 
                                    <a href="login" class="fw-bold">Einloggen</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>