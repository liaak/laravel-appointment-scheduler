<div class="bg-white/10 backdrop-blur-sm rounded-lg p-8 shadow-lg">
    @if($successMessage)
        <div class="mb-6 p-4 bg-green-500/20 border border-green-500 rounded-lg text-green-200">
            {{$successMessage}}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">
        <div>
            <label for="name" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">
                Name *
            </label>
            <input
                type="text"
                id="name"
                wire:model="name"
                class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white"
            >
            @error('name') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">
                Email *
            </label>
            <input
                type="email"
                id="email"
                wire:model="email"
                class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white"
                placeholder="example@example.com"
            >
            @error('email') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="phone" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">
                Phone *
            </label>
            <input
                type="tel"
                id="phone"
                wire:model="phone"
                class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white"
                placeholder="+XXXXXXXXXXX"
            >
            @error('phone') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
        </div>
        {{-- Date and Time , 1 column on mobile, 2 columns on pc --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Date --}}
            <div>
                <label for="date" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">Select Date *</label>
                <input
                    type="date"
                    id="date"
                    wire:model.live="date"
                    min="{{date('Y-m-d')}}"
                    class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white"
                >
                @error('date') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>
            {{-- Time --}}
            <div>
                <label for="time" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">Select Time *</label>
                <select
                    id="time"
                    wire:model="time"
                    class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white"
                >
                    <option value="" class="bg-purple-400">Select a time slot</option>
                    @foreach($availableHours as $hour)
                        <option value="{{$hour}}" class="bg-purple-400">{{$hour}}</option>
                    @endforeach
                </select>
                @error('time') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>
        {{-- Msg (optional) --}}
        <div>
            <label for="message" class="block text-sm font-medium mb-2" style="color: #FCD5CE;">Message (optional)</label>
            <textarea
                id="message"
                wire:model="message"
                rows="4"
                class="w-full px-4 py-2 bg-white/5 border border-white/20 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300 text-white resize-none"
                placeholder="Enter your message here..."
            >
            </textarea>
        </div>

        <div class="text-center">
            <button
                type="submit"
                class="px-8 py-3 bg-gradient-to-r from-pink-300 to-purple-300 text-gray-900 font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-300"
            >
                Book Appointment
            </button>
        </div>
    </form>
</div>
