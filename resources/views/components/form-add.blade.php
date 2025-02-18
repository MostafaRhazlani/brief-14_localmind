<div class="form-add p-4 bg-white shadow sm:rounded-lg w-1/4 fixed right-0 z-10">
    <h3 class="text-xl font-bold text-gray-800">Write Your Question</h3>
    <form action="{{ route('question.store') }}" method="POST">
        @csrf
        <div class="mt-6">
            <x-input-label for="title" :value="__('Title Question')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', )" required autofocus autocomplete="title" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div class="mt-6">
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location', )" required autofocus autocomplete="location" />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>
        <div class="mt-6">
            <x-input-label for="title" :value="__('Content Question')" />
            <x-textarea id="content" name="content" rows="6" class="mt-1 block w-full" :value="old('content', )" required autofocus autocomplete="content" />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>
        <div class="mt-6">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>

</div>
