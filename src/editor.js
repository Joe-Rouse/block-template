import { registerBlockType } from '@wordpress/blocks';
import edit from './components/edit';
import './styles/editor-styles.scss';

registerBlockType( 'bigbite/gutenberg-test', {
	title: 'Gutenberg Test',
	icon: 'smiley',
	category: 'theme',
	edit,
} );