<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-3">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Restaurants') }}
            </h2>
            <!-- Modal toggle -->
            <button
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button" data-modal-toggle="defaultModal">
                اضافه
            </button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
                        <div class="relative">
                            <div class="flex absolute inset-y-0 right-2.5 items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            </div>
                            <input type="search" id="default-search" class="pr-9 block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="نام رستوران ..." required>
                            <button type="submit" class="text-white absolute left-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{__('Search')}}</button>
                        </div>
                    </form>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full">
                                        <thead class="bg-white border-b">
                                        <tr>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                                #
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                                {{__('Name')}}
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                                {{__('Type Restaurant')}}
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                                {{__('Status')}}
                                            </th>
                                            <th scope="col"
                                                class="text-sm font-medium text-gray-900 px-6 py-4 text-right">
                                                {{__('Operations')}}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($restaurants as $restaurant)
                                            <tr class="bg-gray-100 border-b">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $restaurant->id }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $restaurant->name }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $restaurant->type_rest }}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    @if( $restaurant->status  == 1)
                                                        {{__('Active')}}
                                                    @else
                                                        {{__('DeActive')}}
                                                    @endif
                                                </td>
                                                <td class="flex gap-3 text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    <a class="text-blue-500" href="#">{{__('Edite')}}</a>
                                                    <a class="text-green-500" href="#">{{__('Disable')}}</a>
                                                    <a class="text-red-500" href="#">{{__('Delete')}}</a>
                                                    <a class="text-black-500" href="#">{{__('Information')}}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main modal -->
                    <div id="defaultModal" tabindex="-1" aria-hidden="true"
                         class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        اضافه کردن یک رستوران
                                    </h3>
                                    <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">بستن</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div>
                                            <x-input-label for="name" :value="__('Name')"/>

                                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                                          :value="old('name')" required autofocus/>

                                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                                        </div>
                                        <!-- phone_number -->
                                        <div class="mt-4">
                                            <x-input-label for="phone_number" :value="__('Phone Number')"/>

                                            <x-text-input id="phone_number" class="block mt-1 w-full" type="text"
                                                          name="phone_number" :value="old('phone_number')" required
                                                          autofocus/>

                                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                                        </div>
                                        <!-- account number-->
                                        <div class="mt-4">
                                            <x-input-label for="account_number" :value="__('Account Number')"/>

                                            <x-text-input id="account_number" class="block mt-1 w-full" type="text"
                                                          name="account_number" :value="old('account_number')" required
                                                          autofocus/>

                                            <x-input-error :messages="$errors->get('account_number')" class="mt-2"/>
                                        </div>
                                        <div id="map"
                                             style="width: 600px; height: 450px; background: #eee; border: 2px solid #aaa;"
                                             class="my-4"></div>
                                        <input type="text" hidden name="lat" id="lat">
                                        <input type="text" hidden name="lng" id="lng">
                                        <div class="mt-4">
                                            <x-input-label for="address" :value="__('address')"/>

                                            <textarea class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="address" name="address"></textarea>


                                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2"/>
                                        </div>
                                        <x-primary-button class="mr-2">
                                            {{ __('Add') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                                <!-- Modal footer -->

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var myMap = new L.Map('map', {
            key: 'web.4c01cabb3b024a1f94cea4d62f60795f',
            maptype: 'dreamy',
            center: [35.699739, 51.338097],
            zoom: 14,
            poi: true,
            onPoiLayerSwitched: function (state) {
                console.log(state);
            }
        });
    </script>
    <script type="text/javascript">

        myMap.on('click', onMapClick);

        function onMapClick(e) {
            $("#lat").val(e.latlng.lat);
            $("#lng").val(e.latlng.lng);
            console.log(e.latlng.lat);
        }
    </script>


</x-app-layout>
