<footer class="bg-dark">
    <div class="container-lg py-3">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <img src="{{url('storage/'.$schoolLogo)}}" alt="{{$schoolName}}" style="max-width: 40px;">
                <h3>{{$schoolName}}</h4>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-sm-12 col-md-4 my-3">
                <p>{{$schoolAddress}}</p>
                <p>
                    Email
                    <a href="mailto:{{$schoolEmail}}">{{$schoolEmail}}</a>
                </p>
                <p>
                    Fax
                    <a href="tel:{{$schoolFax}}">{{$schoolFax}}</a>
                </p>
                <p>
                    Phone Number
                    <a href="tel:{{$schoolPhoneNumber}}">{{$schoolPhoneNumber}}</a>
                </p>
            </div>

            <div class="col-sm-6 col-md-4 my-3">
                <h3>About School.</h3>
                <ul class="text-capitalize">
                    <li>
                        <a href="{{route('home.extracurriculars')}}" class="text-white" id="text-footer">Extracurriculars</a>
                    </li>
                    <li>
                        <a href="{{route('home.facilities')}}" class="text-white" id="text-footer">Facilities</a>
                    </li>
                    <li>
                        <a href="{{route('home.galery-activities')}}" class="text-white" id="text-footer">galery activities</a>
                    </li>
                    <li>
                        <a href="{{route('home.visi-misi')}}" class="text-white" id="text-footer">Vission and Mission</a>
                    </li>
                    <li>
                        <a href="{{route('home.prestations')}}" class="text-white" id="text-footer">Prestations</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-4 my-3">
                <h3>Others.</h3>
                <li>
                    <a href="{{route('home.articles')}}" class="text-white" id="text-footer">Articles</a>
                </li>
                <li>
                    <a href="{{route('home.article-categories')}}" class="text-white" id="text-footer">Articles Categories</a>
                </li>
                <li>
                    <a href="{{route('home.ebook')}}" class="text-white" id="text-footer">E book</a>
                </li>
                <li>
                    <a href="{{route('home.employees')}}" class="text-white" id="text-footer">Employees</a>
                </li>
                <li>
                    <a href="{{route('home.students')}}" class="text-white" id="text-footer">Students</a>
                </li>
                <li>
                    <a href="{{route('home.message.create')}}" class="text-white" id="text-footer">Message</a>
                </li>
                <li>
                    <a href="{{route('home.testimonials')}}" class="text-white" id="text-footer">Testimonials</a>
                </li>
            </div>

        </div>
    </div>
    <hr class="border border-white">
    <div class="d-flex justify-content-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a href="{{$schoolInstagram}}" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram text-rose fs-4"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="{{$schoolTwitter}}" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter text-primary fs-4"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="{{$schoolFacebook}}" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook text-cyan fs-4"></i>
                </a>
            </li>
        </ul>
    </div>
    <hr class="border border-white">
    <div class="text-center">
        <p class="mb-0">
            © Copyright {{$schoolName}} {{ Date('Y') }} <br> All Rights Reserved
        </p>
    </div>
</footer>