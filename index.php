<!doctype html>
<html data-theme="halloween">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/dist/tailwind.css" rel="stylesheet">
    </head>
    <body>

        <div class="content-wrapper container mx-auto mt-12 prose lg:prose-2xl ">

            <h1 class="text-3xl text-center text-primary">Design Links</h1>

            <div class="card lg:card-side bordered card glass lg:card-side text-neutral-content w-4/6 mx-auto">
                <div class="card-body">
                    <!-- <h2 class="card-title">Add the link</h2>  -->
                    <p>Please upload the image and URL for useful site</p> 
                    <div class="card-actions">

                        <div class="form-control">
                          <label class="label">
                            <span class="label-text">Add new URL</span>
                          </label> 
                          <div class="flex space-x-2">
                            <input type="text" placeholder="URL" class="w-full input input-primary input-bordered"> 
                            <button class="btn btn-primary">ADD</button>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="divider my-16">OR</div> 

            <div class="tabs tabs-boxed">
                <a class="tab tab-lg tab-active">Frameworks</a> 
                <a class="tab tab-lg">Tools</a>
                <a class="tab tab-lg">Typography</a>
                <a class="tab tab-lg">CeatSheets</a>
                <a class="tab tab-lg">Deign Collections</a>
            </div>

            <section class="container" >
                <ul class="flex">
                    <li class="card bordered w-1/3 ">
                      <figure>
                        <img src="https://picsum.photos/id/1005/400/250">
                      </figure> 
                      <div class="card-body">
                        <h2 class="card-title">Top image
                          <div class="badge mx-2 badge-secondary">NEW</div>
                        </h2> 
                        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p> 
                        <div class="justify-end card-actions">
                          <button class="btn btn-secondary">More info</button>
                        </div>
                      </div>
                    </li>

                    <li class="card bordered w-1/3">
                      <figure>
                        <img src="https://picsum.photos/id/1005/400/250">
                      </figure> 
                      <div class="card-body">
                        <h2 class="card-title">Top image
                          <div class="badge mx-2 badge-secondary">NEW</div>
                        </h2> 
                        <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p> 
                        <div class="justify-end card-actions">
                          <button class="btn btn-secondary">More info</button>
                        </div>
                      </div>
                    </li> 
                </ul>
            </section>

        </div>

    </body>
</html>