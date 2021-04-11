import './styles.scss'
import { AutoTextArea } from 'react-auto-textarea'

wp.blocks.registerBlockType('plugin-sandbox/comic-panel-block', {
  apiVersion: 2,
  attributes: {
    description: {
      type: 'string'
    },
    title: {
      type: 'string'
    }
  },
  category: 'comic-script',
  edit: props => {
    const { attributes, setAttributes } = props
    const { description, title } = attributes

    const handleChange = attribute => e => {
      props.setAttributes({
        [attribute]: e.target.value
      })
    }

    return (
      <div className={'comic-panel'}>
        <input
          className={'title'}
          onChange={handleChange('title')}
          value={title}
        />
        <input onChange={handleChange('description')} value={description} />
      </div>
    )
  },
  example: {},
  icon: 'welcome-widgets-menus',
  save: props => {
    return (
      <div className={'comic-panel'}>
        <div className={'title'}>{props.attributes.title}</div>
        <div className={'description'}>{props.attributes.description}</div>
      </div>
    )
  },
  title: 'Panel'
})

wp.blocks.registerBlockType('plugin-sandbox/comic-dialog-block', {
  apiVersion: 2,
  attributes: {
    dialogue: {
      type: 'string'
    },
    speaker: {
      type: 'string'
    }
  },
  category: 'comic-script',
  edit: props => {
    const { attributes, setAttributes } = props
    const { dialogue, speaker } = attributes

    const handleChange = attribute => e => {
      props.setAttributes({
        [attribute]: e.target.value
      })
    }
    return (
      <div className={'comic-dialogue'}>
        <input onChange={handleChange('speaker')} value={speaker} />
        <AutoTextArea
          onChange={handleChange('dialogue')}
          value={dialogue}
          maxHeight={250}
        />
      </div>
    )
  },
  example: {},
  icon: 'format-chat',
  save: props => {
    const { attributes } = props
    const { dialogue, speaker } = attributes
    return (
      <div className={'comic-dialogue'}>
        <div className={'speaker'}>{speaker}</div>
        <div className={'dialogue'}>
          <pre>{dialogue}</pre>
        </div>
      </div>
    )
  },
  title: 'Dialogue'
})
