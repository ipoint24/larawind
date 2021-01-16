<x-default-layout>

    <h1>Test</h1>
    <!-- Base-Section -->
    <x-section.base>
        Test
        <x-slot name="top">
            <x-section.heading icon="fad fa-users" text="Title">
                <x-slot name="description">Lorem ipsum</x-slot>
            </x-section.heading>
        </x-slot>
        <x-slot name="bottom">
            <x-form.form>
                <x-slot name="title">
                    {{ __('Update Password') }}
                </x-slot>

                <x-slot name="description">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </x-slot>
                <x-slot name="form">
                    <x-form.group>
                        <x-form.label for="first_name">
                            Label
                        </x-form.label>
                        <x-form.input id="first_name" placeholder="First name" name="name"/>
                        <x-form.helptext>
                            Hilfstext
                        </x-form.helptext>
                    </x-form.group>
                    <x-slot name="actions">
                        <p>ActionMessage</p>
                        <x-form.button>
                            {{ __('Save') }}
                        </x-form.button>
                    </x-slot>
                </x-slot>
            </x-form.form>
        </x-slot>
    </x-section.base>

    <div class="py-12">
        <div class="report-card">
            <div class="card">
                <div class="card-body flex flex-col">

                    <!-- top -->
                    <div class="flex flex-row justify-left items-center">
                        <div class="h6 text-green-700 fad fa-users"></div>
                        <div class="h6 px-2">Title</div>
                    </div>
                    <!-- end top -->

                    <!-- bottom -->
                    <div class="mt-8">
                        <table class="table-auto w-full text-left">
                            <thead>
                            <tr>
                                <th class="px-4 py-2 border-r"></th>
                                <th class="px-4 py-2 border-r">product</th>
                                <th class="px-4 py-2 border-r">price</th>
                                <th class="px-4 py-2">date</th>
                            </tr>
                            </thead>
                            <tbody class="text-gray-600">

                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 px-4 py-2">Lightning to USB-C Adapter Lightning.</td>
                                <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>
                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 px-4 py-2">Apple iPhone 8.</td>
                                <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>
                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 px-4 py-2">Apple MacBook Pro.</td>
                                <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>
                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-red-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 px-4 py-2">Samsung Galaxy S9.</td>
                                <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>
                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-yellow-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 px-4 py-2">Samsung Galaxy S8 256GB.</td>
                                <td class="border border-l-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>
                            <tr>
                                <td class="border border-l-0 border-b-0 px-4 py-2 text-center text-green-500"><i class="fad fa-circle"></i></td>
                                <td class="border border-l-0 border-b-0 px-4 py-2">apple watch.</td>
                                <td class="border border-l-0 border-b-0 px-4 py-2">$<span class="num-2"></span></td>
                                <td class="border border-l-0 border-b-0 border-r-0 px-4 py-2"><span class="num-2"></span> minutes ago</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end bottom -->

                </div>
            </div>
        </div>
    </div>
    <!-- end card -->
</x-default-layout>
