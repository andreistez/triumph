import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import { disableBodyScroll, enableBodyScroll } from 'body-scroll-lock'
import { setTargetElement, getTargetElement } from './global'

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

	initSwiper( '.swiper-gallery', 16, '.swiper-pagination', '.swiper-next', '.swiper-prev', 1 )
	initSwiper( '.swiper-awards', 28, '.awards-pagination', '.awards-next', '.awards-prev', 2)
	initSwiper( '.swiper-persons', 28, '.persons-pagination', '.persons-next', '.persons-prev', 4 )
	initSwiperPag( '.swiper-format', '.format-pagination' )
	initSwiperPag( '.swiper-payments', '.payments-pagination' )

	callModal( '.modal-lesson', '#modal-lesson' )
	callModal( '.modal-consultation', '#modal-consultation')

	setIDforSections()
} )

const setIDforSections = () => {
	const sections = document.querySelectorAll('section')
	sections.forEach((section, index) => {
		const sectionName = section.className
		const id = sectionName + '-' + (index + 1)
		section.setAttribute('id', id)
	})
}

const showMaps = () => {
	const wrappers = document.querySelectorAll( '.addresses' )

	wrappers.forEach( wrapper => {
		const buttons = wrapper.querySelectorAll( '.addresses-more' )

		if( ! buttons.length ) return

		buttons.forEach( button => {
			button.addEventListener( 'click', () => {
				wrapper.classList.toggle( 'clicked' )
			} )
		} )
	} )
}

const showBurgerMenu = () => {
	const wrapper = document.querySelector( '.header-wrapper' )
	const button = document.querySelector( '.burger-button' )
	const closeBtn = wrapper.querySelector('.close')

	if( ! wrapper && ! button ) return

	button.addEventListener( 'click', () => {
		setTargetElement( document.querySelector( '#burger-menu' ) )

		if( ! wrapper.classList.contains( 'opened' ) ){
			wrapper.classList.add( 'opened' )
			disableBodyScroll( getTargetElement(), { reserveScrollBarGap: true } )
		}else{
			wrapper.classList.remove( 'opened' )
		}
	} );

	( () => {
		const links = document.querySelectorAll( '.menu a' )

		if( ! links.length ) return

		links.forEach( link => {
			link.addEventListener( 'click', () => {
				enableBodyScroll( getTargetElement() )
				wrapper.classList.remove( 'opened' )
			} )
		} )
	} )();

		closeBtn.addEventListener('click', () => {
			if(wrapper.classList.contains('opened')) {
				wrapper.classList.remove('opened')
				enableBodyScroll( getTargetElement() )
			} 
		})

	document.addEventListener( 'click', e => {
		if( ! wrapper.contains( e.target ) && ! button.contains( e.target ) && wrapper.classList.contains( 'opened' ) ){
			wrapper.classList.remove( 'opened' )
			enableBodyScroll( getTargetElement() )
		}
	} )
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

const initSwiper = ( selector, gap, pag, next, prev, view ) => {
	const swiper = new Swiper( selector, {
		slidesPerView: 1,
		spaceBetween: gap,

		modules: [Pagination, Navigation],
		pagination: {
			clickable: 1,
			el: pag
		},

		navigation: {
			nextEl: next,
			prevEl: prev
		},

		breakpoints: {
			1200: {
				slidesPerView: view
			}
		}
	} )
}

const initSwiperPag = ( selector, pag ) => {
	const swiper = new Swiper( selector, {
		slidesPerView: 1,
		spaceBetween: 16,

		modules: [Pagination],
		pagination: {
			clickable: 1,
			el: pag
		},

		breakpoints: {
			992: {
				spaceBetween: 28
			},

			1200: {
				slidesPerView: 3
			}
		}
	} )
}

const callModal = ( btn, selector) => {
	const buttons = document.querySelectorAll( btn )
	const modal = document.querySelector( selector )
	const closeBtn = modal.querySelector('form .close')
	const closeResp = modal.querySelector('.close-resp')

	if( ! buttons.length && ! modal ) return;

	buttons.forEach( button => {
		button.addEventListener( 'click', () => {
			if( ! modal.classList.contains( 'opened' ) ){
				disableBodyScroll( modal, { reserveScrollBarGap: true } )
				modal.classList.add( 'opened' )
			}
		} )
	} )

	modal.addEventListener( 'click', e => {
		if( e.target === modal ){
			closeModal( modal )
		}
	} )

	closeBtn.addEventListener('click', () => {
		console.log('click')
		modal.classList.add( 'closed' )
		enableBodyScroll( modal )
		setTimeout( () => {
			modal.classList.remove( 'opened', 'closed' )
			enableBodyScroll( modal )
		}, 350 )
	})

	closeResp.addEventListener('click', () => {
		modal.classList.add( 'closed' )
		enableBodyScroll( modal )
		setTimeout( () => {
			modal.classList.remove( 'opened', 'closed' )
			enableBodyScroll( modal )
		}, 350 )
	})
}

const closeModal = ( modal ) => {
	modal.classList.add( 'closed' )
	enableBodyScroll( modal )
	setTimeout( () => {
		modal.classList.remove( 'opened', 'closed' )
	}, 350 )
}