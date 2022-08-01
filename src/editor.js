import { registerBlockType } from '@wordpress/blocks';
import edit from './components/edit';
import './styles/editor-styles.scss';

registerBlockType( 'bigbite/gutenberg-test', {
	edit,
} );