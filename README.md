# XYZ

Player coordinate and world display command for Axolotl-PM API 5.

[![CI](https://github.com/NhanAZ-Plugins/XYZ/actions/workflows/build.yml/badge.svg)](https://github.com/NhanAZ-Plugins/XYZ/actions/workflows/build.yml)
[![Latest release](https://img.shields.io/github/v/release/NhanAZ-Plugins/XYZ)](https://github.com/NhanAZ-Plugins/XYZ/releases/latest)
[![Discord](https://img.shields.io/discord/986553214889517088?label=Discord&logo=discord&logoColor=white&color=5865F2)](https://discord.gg/j2X83ujT6c)


## Compatibility

- Minimum Axolotl-PM API: `5.0.0`.
- CI checks PHPStan at maximum level and builds against exact API source revisions for `5.0.0` and `5.49.2`.
- CI starts the built PHAR on Axolotl-PM `5.49.2`.
- These are the verified compatibility points; compatibility with intermediate API 5 releases is not inferred.

The command is available to players and replies with a short Vietnamese message when run from the console. Coordinates are rounded to one decimal place, and the displayed world is its folder name.

## Build

GitHub Actions uses [DevTools](https://github.com/NhanAZ/DevTools) to run PHPStan at maximum level, build the plugin PHAR and validate its contents. Build inputs are pinned to exact source revisions or checksums for reproducibility.

The manifest credits Ghast Noob. The repository has no `LICENSE` file; no license was added or changed as part of this port.
