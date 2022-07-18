import edit from '../components/edit';
import metadata from '../../inc/block.json';
import '../styles/editor.scss';

const { registerBlockType } = wp.blocks;

wp.domReady(() => {
  registerBlockType(metadata, {
    edit,
    save() {
      return null;
    },
  });
});
