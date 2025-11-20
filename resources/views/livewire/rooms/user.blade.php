  <div class="col-span-4 p-4 rounded-md shadow-sm border bg-white">
                <h2 class="text-lg font-medium">Users</h2>

                <ul role="list" class="divide-y mt-4 divide-gray-100 dark:divide-white/5">
                    @for ($i = 0; $i <= 5; $i++)
                        <li class="flex gap-x-2.5 py-3.5">
                            {{-- <flux:avatar tooltip="{{ $user->name }}" name="{{ $user->initials() }}" --}}
                            <flux:avatar tooltip="omar" name="omar"
                                class="size-10 flex-none rounded-full bg-gray-50 dark:bg-gray-800 dark:outline dark:-outline-offset-1 dark:outline-white/10" />
                            <div class="min-w-0">
                                <div class="inline-flex">
                                    {{-- <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">{{ $user->name }}
                                    </p> --}}
                                    <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">name
                                    </p>
                                    {{-- @if (in_array($user->id, $typingIds))
                                        <span class="animate-pulse ml-2 text-xs text-green-800">typing...</span>
                                    @endif --}}
                                </div>
                                {{-- <p class="truncate text-xs/5 text-gray-500 dark:text-gray-400">{{ $user->email }}</p> --}}
                                <p class="truncate text-xs/5 text-gray-500 dark:text-gray-400">email</p>
                            </div>
                        </li>
                    @endfor
                </ul>

            </div>
