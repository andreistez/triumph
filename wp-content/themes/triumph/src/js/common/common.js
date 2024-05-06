import Swiper from 'swiper';
import { Navigation, Pagination} from 'swiper/modules';
import { close } from "./global"
import { outerClose } from "./global"

document.addEventListener( 'DOMContentLoaded', () => {
	'use strict'

	if( document.querySelectorAll( '.yt-lazy' ).length ){
		const
			tag = document.createElement( 'script' ),
			firstScriptTag = document.getElementsByTagName( 'script' )[0]

		tag.src = 'https://www.youtube.com/iframe_api'
		tag.onload = loadYTVideo
		firstScriptTag.parentNode.insertBefore( tag, firstScriptTag )
	}

	showMaps()
	showBurgerMenu()
	initSwiper('.swiper-gallery', 'auto', 16)
	initSwiperPag('.swiper-format', 'auto')
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

const loadYTVideo = () => {
	const videos = document.querySelectorAll( '.yt-lazy' )

	window.YT.ready( () => {
		videos.forEach( video => {
			video.addEventListener( 'click', e => {
				e.preventDefault()

				const
					inner = video.querySelector( '.yt-lazy-placeholder' ),
					videoId = inner.dataset.video

				if( ! videoId ) return

				new window.YT.Player( inner.id, {
					videoId,
					events: {
						'onReady': event => {
							event.target.setVolume( 25 )
							event.target.playVideo()
						}
					}
				} )
			} )
		} )
	} )
}

const initSwiper = (selector, view, gap) => {
	const swiper = new Swiper(selector, {
		slidesPerView: view,
		spaceBetween: gap,

		modules: [Pagination, Navigation],
		pagination: {
			clickable: 1,
		  	el: '.swiper-pagination',
		},

		navigation: {
		  nextEl: '.swiper-next',
		  prevEl: '.swiper-prev',
		},
	  });
}

const initSwiperPag = (selector, view) => {
	const swiper = new Swiper(selector, {
		slidesPerView: view,
		spaceBetween: 16,

		modules: [Pagination],
		pagination: {
			clickable: 1,
		  	el: '.format-pagination',
		},

		breakpoints: {
			992: {
				spaceBetween: 28
			}
		}
	  })
}

