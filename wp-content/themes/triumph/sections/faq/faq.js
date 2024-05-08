import { reCalculateDropdownHeight } from "../../src/js/common/global"

document.addEventListener('DOMContentLoaded', () => {
    'use strict'

    toggleDropdown()
})

const toggleDropdown = () => {
	const dropdownButtons = document.querySelectorAll('.dropdown-button')

	if (!dropdownButtons.length) return

	dropdownButtons.forEach(button => {
		button.addEventListener('click', () => {
			const dropdown = button.closest('.dropdown')
			const dropdownOpen = dropdown.querySelector('.dropdown-open')
			if (!dropdownOpen) return

			if (!dropdown.classList.contains('opened')) {
				dropdown.classList.add('opened')
				reCalculateDropdownHeight(dropdown)
			} else {
				dropdown.classList.remove('opened')
				dropdownOpen.style.height = '0'
			}
		})
	})
}

window.addEventListener('resize', () => {
	const dropdowns = document.querySelectorAll('.dropdown.opened')

	if (!dropdowns.length) return

	dropdowns.forEach(dropdown => reCalculateDropdownHeight(dropdown))
})