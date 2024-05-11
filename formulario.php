<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dictaminacion</title>
        <link href="./resources/css/tailwind.min.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <style>
            .containerForm{
                display: flex;
                justify-content: center;
                padding: 5%;
                background: #80808038;
            }
            form{
                background: white;
                padding: 3%;
                border-radius: 20px;
                width: 50%;
            }
            button:hover{
                background-color: #6A1C32;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="containerForm">
            <form>
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Oficios</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Llenar el formulario para generar el PDF </p>
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="NoOficio" class="block text-sm font-medium leading-6 text-gray-900">Numero de Oficio</label>
                                <div class="mt-2">
                                    <input type="text" name="NoOficio" id="NoOficio" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="asunto" class="block text-sm font-medium leading-6 text-gray-900">Asunto</label>
                                <div class="mt-2">
                                    <input type="text" name="asunto" id="asunto" autocomplete="asunto" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="lema" class="block text-sm font-medium leading-6 text-gray-900">Lema</label>
                                <div class="mt-2">
                                    <input type="text" name="lema" id="lema" autocomplete="lema" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="corresponde" class="block text-sm font-medium leading-6 text-gray-900">A quien corresponde</label>
                                <div class="mt-2">
                                    <input type="text" name="corresponde" id="corresponde" autocomplete="corresponde" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="cargo" class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                                <div class="mt-2">
                                    <input type="text" name="cargo" id="cargo" autocomplete="cargo" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="dependencia" class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                                <div class="mt-2">
                                    <input type="text" name="dependencia" id="dependencia" autocomplete="dependencia" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="summernote" class="block text-sm font-medium leading-6 text-gray-900" >Contenido</label>
                                <div class="mt-2">
                                    <textarea id="summernote" name="summernote" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="firma" class="block text-sm font-medium leading-6 text-gray-900">Nombre de quien Firma</label>
                                <div class="mt-2">
                                    <input type="text" name="firma" id="firma" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Imagen de la Firma</label>
                                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Cargar Archivo</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                            <p class="pl-1">en format:o</p>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-600">PNG o JPG</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <label for="entidad" class="block text-sm font-medium leading-6 text-gray-900">Dependencia</label>
                                <div class="mt-2">
                                    <input type="text" name="entidad" id="entidad" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="button" class="rounded-md  px-3 py-2 text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                        <button type="button" class="rounded-md  px-3 py-2 text-sm font-semibold leading-6 text-gray-900">Guardar</button>
                        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Generar</button>
                    </div>
                </div>
            </form>
        </div>
        <script>
            $('#summernote').summernote({
                placeholder: 'Ingresa el contenido aqui',
                tabsize: 2,
                height: 120,
                toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                //  ['table', ['table']],
                ['insert', ['link']],
                //  ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
    </script>
    </body>
</html>