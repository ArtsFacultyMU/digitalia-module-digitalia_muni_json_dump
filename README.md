# digitalia_muni_json_dump

Dumps json serialization of entities to a media entity, which has a reference to dumped entity. Currently supported entity types are:
- `node`
- `media`
- `user`
- `taxonomy_term`

Dump is created on each entity update in `hook_entity_update`/`hook_entity_insert` hooks.

## migration from submodule in digitalia_muni_general_includes
- uninstall module
- check into main brach of `digitalia_muni_general_includes`
- restart `apache2` and `php8.x-fpm` services
- install and enable this module
- check that an action provided by this module works (checking any one should be sufficient)