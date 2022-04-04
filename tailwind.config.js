const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
	content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		'./storage/framework/views/*.php',
		'./resources/views/**/*.blade.php',
		'./resources/js/**/*.vue',
		'./node_modules/flowbite/**/*.js',
	],
	theme: {
		extend: {
			fontFamily: {
				sans: [
					'Nunito',
					'system-ui',
					'BlinkMacSystemFont',
					'-apple-system',
					'sans-serif',
				],
				serif: [
					'Constantia',
					'Lucida Bright',
					'Lucidabright',
					'Lucida Serif',
					'Lucida',
					'DejaVu Serif',
					'Bitstream Vera Serif',
					'Liberation Serif',
					'Georgia',
					'serif',
				],
				mono: [
					'Menlo',
					'Monaco',
					'Consolas',
					'Liberation Mono',
					'Courier New',
					'monospace',
				],
			},
			height: {
				nav: '5rem',
				slider: '48rem',
				about: '35rem',
				...defaultTheme.height,
			},
			fontSize: {
				xxs: '.65rem',
				xs: '.75rem',
				sm: '.875rem',
				tiny: '.875rem',
				base: '1rem',
				lg: '1.125rem',
				xl: '1.25rem',
				'2xl': '1.5rem',
				'3xl': '1.875rem',
				'4xl': '2.25rem',
				'5xl': '3rem',
				'6xl': '4rem',
				'7xl': '5rem',
				'8xl': '6rem',
				'9xl': '7rem',
				'10xl': '8rem',
				'11xl': '9rem',
			},
			colors: {
				primary: '#FDC421',
				'medium-primary': '#FFE9AC',
				'light-primary': '#FFF3D3',
				'light-footer': '#231F20',
				'dark-footer': '#181516',
				...defaultTheme.colors,
			},
		},
	},
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
		require('flowbite/plugin'),
	],
}
