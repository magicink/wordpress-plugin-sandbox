import './styles.scss'

wp.blocks.registerBlockType('plugin-sandbox/comic-panel-block', {
  apiVersion: 2,
  attributes: {
    content: {
      type: 'string'
    }
  },
  edit: props => {
    const handleChange = e => {
      props.setAttributes({
        content: e.target.value
      })
    }
    const handleRockyChange = e => {
      props.setAttributes({
        rocky: e.target.value
      })
    }
    return (
      <div className={'comic-panel-content'}>
        <input onChange={handleChange} value={props.attributes.content} />
      </div>
    )
  },
  example: {},
  icon: 'format-chat',
  title: 'Comic Panel',
  category: 'text',
  save: props => {
    return (
      <div className={'comic-panel-content'}>{props.attributes.content}</div>
    )
  }
})
