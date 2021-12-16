<div class="card lg:card-side bordered card glass lg:card-side text-neutral-content w-4/6 mx-auto">
                <div class="card-body">
                    <!-- <h2 class="card-title">Add the link</h2>  -->
                    <p>Please upload the image and URL for useful site</p> 
                    <div class="card-actions">



                <!-- https://tailwindcomponents.com/component/file-upload-with-drop-on-and-preview -->
                <!-- file upload modal -->
                        <article aria-label="File Upload Modal" class="mx-auto relative flex flex-col rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">

                          <!-- scroll area -->
                          <section class="h-full overflow-auto p-8 w-full h-full flex flex-col">
                            <header class="border-dashed border-2 border-orange-400 py-12 px-5 flex flex-col justify-center items-center">
                              <p class="mb-3 text-sm flex justify-center">
                                <span>Drag and drop your files anywhere or</span>
                              </p>
                              <input id="hidden-input" type="file" multiple class="hidden" />
                              <button id="button" class="mt-2 btn btn-primary">
                                Upload a file
                              </button>
                            </header>


                            <ul id="gallery" class="flex flex-1 flex-wrap -m-1">
                              <li id="empty" class="h-full w-full text-center flex flex-col items-center justify-center items-center">
                              </li>
                            </ul>
                          </section>
                        </article>




                        <div class="form-control">
                          <label class="label">
                            <span class="label-text">Add new URL</span>
                          </label> 
                          <div class="flex space-x-2">
                            <input type="text" placeholder="URL" class="w-full input input-primary input-bordered"> 
                            <button class="btn btn-primary">ADD</button>
                          </div>
                          <label class="label">
                            <span class="label-text">Description</span>
                          </label> 
                          <div class="flex space-x-2">
                            <input type="text" placeholder="Description" class="w-full input input-primary input-bordered"> 
                          </div>
                        </div>
                    </div>
                </div>
            </div>