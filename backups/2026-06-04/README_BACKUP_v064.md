# Hoosier Online backup — v064 sanitized checkpoint

This is a GitHub backup checkpoint for the Hoosier Online Sales Management Portal after the v064 Lead Generation Prompt update.

## Status

- Source reconstructed from the current package chain through v064.
- Production database credentials are intentionally **not** included in this GitHub backup because this repository is public.
- `database.php` should be restored on the live server with live credentials directly in cPanel/hosting, not committed to GitHub.

## Current operator doctrine

- Admin is optimized for one operator on iPhone Safari.
- Prospects is the primary work surface.
- Sales Research is fallback/reference and now generates lead/candidate sourcing prompts.
- Candidate workflow is: generate leads → import candidates → bulk triage → full refinement only for worthy prospects.
- No scraping, preview.php, payment, or outreach automation is currently approved.

## Files expected in the sanitized checkpoint

See `backup_manifest_v064.json` in this folder.

## Restore note

This checkpoint is a sanitized code/source checkpoint, not a live credential dump. After restoring, set live database credentials separately on the server.
