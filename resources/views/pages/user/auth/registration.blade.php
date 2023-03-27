<x-auth-layouts title="Register">    

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.html" class="d-inline-block auth-logo">
                                    <img src="assets/images/logo-light.png" alt="" height="20">
                                </a>
                            </div>
                            <p class="mt-3 fs-16 fw-semibold">Premium Admin & Dashboard Template</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
    
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                        
                            <div class="card-body p-4"> 
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create New Account</h5>
                                    <p class="text-muted">Get your free velzon account now</p>
                                </div>
                                <div class="p-2 mt-4">
                                <form class="needs-validation" method="post" action="{{ route('register.custom') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email address" required>  
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>      
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
                                            <div class="invalid-feedback">
                                                Please enter username
                                            </div>
                                        </div>
                                        
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password" required>
                                            <div class="invalid-feedback">
                                                Please enter password
                                            </div>       
                                        </div>
                                        
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Sign Up</button>
                                        </div>
    
                                        <div class="mt-4 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="fs-14 mb-4 title text-muted">Create account with</h5>
                                            </div>
    
                                            <div>
                                                <button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-facebook-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light"><i class="ri-google-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-dark btn-icon waves-effect waves-light"><i class="ri-github-fill fs-16"></i></button>
                                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light"><i class="ri-twitter-fill fs-16"></i></button>
                                            </div>
                                        </div>
                                    </form>
    
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
    
                        <div class="mt-4 text-center">
                            <p class="mb-0">Already have an account ? <a href="{{ route('login') }}" class="fw-bold text-primary text-decoration-underline"> Signin </a> </p>
                        </div>
    
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
</x-auth-layouts>