# digitalia_muni_json_dump

Dumps json serialization of entities to a media entity, which has a reference to dumped entity. Currently supported entity types are:
- `node`
- `media`
- `user`
- `taxonomy_term`

Dump is created on each entity update in `hook_entity_update`/`hook_entity_insert` hooks.
