@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'h-9 border-red-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-500 dark:focus:border-red-500 focus:ring-red-500 dark:focus:red-500 rounded-md shadow-sm px-0']) }}>
