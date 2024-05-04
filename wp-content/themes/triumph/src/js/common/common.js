import { close } from "./global"
import { outerClose } from "./global"

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	showMaps()
	showBurgerMenu()
} )

const showMaps = () => {
	const wrappers = document.querySelectorAll('.addresses')

	wrappers.forEach(wrapper => {
		const buttons = wrapper.querySelectorAll('.show-maps')

		if (!buttons.length) return

		buttons.forEach(button => {
			button.addEventListener('click', () => {
				wrapper.classList.toggle('clicked')
			})
		})
	})
}

const showBurgerMenu = () => {
	const wrapper = document.querySelector('.header-wrapper')
	const button  = document.querySelector('.burger-button')

	if(!wrapper && ! button) return

	button.addEventListener('click', () => {
		if(!wrapper.classList.contains('opened')) wrapper.classList.add('opened')
		else wrapper.classList.remove('opened')
	})

	const closeMenuAfterClick = (() => {
		const links = document.querySelectorAll('.menu a')
	
		if (!links.length) return
	
		links.forEach(link => {
			link.addEventListener('click', () => {
				wrapper.classList.remove('opened')
			})
		})
	})()

	close('.header-wrapper')
	outerClose('.header-wrapper')
}

