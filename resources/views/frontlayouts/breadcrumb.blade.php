<div class="breadcrumb-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h1 class="text-center">{{Request()->route()->getName()}}</h1>
                    <div class="breadcrumb-bar">
                        <ul class="breadcrumb text-center">
                            <li><a href="/">Home</a></li>
                            <li>{{Request()->route()->getName()}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>