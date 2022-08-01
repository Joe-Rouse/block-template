const { useBlockProps } = wp.blockEditor;

const edit = () => {
  const blockProps = useBlockProps();
  return <div {...blockProps}>My Test Block</div>;
};
export default edit;